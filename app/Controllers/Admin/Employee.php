<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Core\Services\ServiceEmployee;
use App\Core\Services\ServiceReference;
use App\Models\ModelRefCoorporate;
use App\Models\ModelDepartments;
use App\Models\ModelPosition;
use App\Models\ModelSex;
use App\Models\ModelStatus;
use App\Core\Services\ServiceAuth;
use App\Models\ModelRefTypeEmployee;


class Employee extends BaseController
{
    protected $serviceEmployee;
    protected $serviceReference;
    protected $coorporate;
    protected $departments;
    protected $position;
    protected $data = [];
    protected $sex;
    protected $status;
    protected $userActive;
    protected $typeEmployee;


    public function __construct()
    {
        $this->serviceEmployee = new ServiceEmployee();
        $this->serviceReference = new ServiceReference();
        $this->sex = new ModelSex();
        $this->status = new ModelStatus();
        $this->coorporate = new ModelRefCoorporate();
        $this->departments = new ModelDepartments();
        $this->position = new ModelPosition();
        $this->userActive = new ServiceAuth();
        $this->typeEmployee = new ModelRefTypeEmployee();
    }
    public function index()
    {
        $this->data = [
            'bu' => $this->coorporate->asObject()->findAll(),
            'sex' => $this->sex->asObject()->findAll(),
            'status' => $this->status->asObject()->findAll(),
            'dept' => $this->departments->asObject()->findAll(),
            'position' => $this->position->asObject()->findAll(),
            'employee' => $this->serviceEmployee->getAllEmployee(),
            'typeEmployee' => $this->typeEmployee->asObject()->findAll(),
        ];
        return view('admin/employee/v_employee', $this->data);
    }

    public function store()
    {
        if ($this->serviceEmployee->findById($this->request->getPost('nik'))) {
            session()->setFlashdata('msg', ["danger", "Karyawan sudah terdaftar"]);
            return redirect()->to('/inv-back/employee');
        }

        $img = $this->request->getFile('images');

        $imgDefault = "";
        if (!$img->getName()) {
            $imgDefault = "default.jpg";
        } else {
            $imgDefault = $img->getRandomName();
            $img->move(FCPATH . 'photo', $imgDefault);
        }
        $this->data = [
            'id_emp' => $this->serviceEmployee->generateId('id-emp'),
            'type_emp' => $this->request->getPost('type-emp'),
            'nik' => $this->request->getPost('nik'),
            'nip' => $this->request->getPost('nip'),
            'name_emp' => $this->request->getPost('name-emp'),
            'sex' => $this->request->getPost('sex'),
            'ref_department_id' => $this->request->getPost('ref-department-id'),
            'ref_position_id' => $this->request->getPost('ref-position-id'),
            'sim_sio' => $this->request->getPost('sim-sio'),
            'license_number' => $this->request->getPost('license-number'),
            // 'date_expired_request' => $this->request->getPost('date-expired-request'),
            // 'date_expired_sim_sio' => $this->request->getPost('date-expired-sim-sio'),
            'status_emp' => $this->request->getPost('status-emp'),
            'images_emp' => $imgDefault,
            'ref_coorporate_id' => $this->request->getPost('ref-coorporate-id'),
            'ref_user_id' => $this->userActive->checkStatusLogin()['uid'],
        ];

        $isSuccess = $this->serviceEmployee->storeEmployee($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Karyawan berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/employee');
    }

    public function detail($id)
    {
        $this->data = [
            'bu' => $this->coorporate->asObject()->findAll(),
            'dept' => $this->departments->asObject()->findAll(),
            'position' => $this->position->asObject()->findAll(),
            'employee' => $this->serviceEmployee->getEmployeeId($id),
            'status' => $this->serviceReference->getStatus(),
            'sex' => $this->sex->asObject()->findAll(),
            'typeEmployee' => $this->typeEmployee->asObject()->findAll(),
        ];

        return view('admin/employee/v_detail_employee', $this->data);
    }

    public function update()
    {
        $this->data = [
            'type_emp' => $this->request->getPost('type-emp'),
            'nik' => $this->request->getPost('nik'),
            'nip' => $this->request->getPost('nip'),
            'name_emp' => $this->request->getPost('name-emp'),
            'sex' => $this->request->getPost('sex'),
            'ref_department_id' => $this->request->getPost('dept'),
            'ref_position_id' => $this->request->getPost('position'),
            'sim_sio' => $this->request->getPost('sim-sio'),
            'license_number' => $this->request->getPost('license-number'),
            // 'date_expired_request' => $this->request->getPost('date-expired-request'),
            // 'date_expired_sim_sio' => $this->request->getPost('date-expired-sim-sio'),
            'status_emp' => $this->request->getPost('status'),
            'ref_coorporate_id' => $this->request->getPost('bu'),
            'ref_user_id' => $this->userActive->checkStatusLogin()['uid'],
        ];
        $isSuccess = $this->serviceEmployee->updateEmployee($this->request->getPost('employee-id'), $this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data customer berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/employee');
    }
}
