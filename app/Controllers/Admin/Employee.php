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
        ];

        //dd($this->data);
        return view('admin/employee/v_employee', $this->data);
    }

    public function store()
    {
        $this->data = [
            'id_emp' => $this->serviceEmployee->generateId('id-emp'),
            'nik' => $this->request->getPost('nik'),
            'nip' => $this->request->getPost('nip'),
            'name_emp' => $this->request->getPost('name-emp'),
            'sex' => $this->request->getPost('sex'),
            'ref_department_id' => $this->request->getPost('ref-department-id'),
            'ref_position_id' => $this->request->getPost('ref-position-id'),
            'date_request' => $this->request->getPost('date-request'),
            'date_eye_test' => $this->request->getPost('date-eye-test'),
            'date_write_test' => $this->request->getPost('date-write-test'),
            'date_practice_test' => $this->request->getPost('date-practice-test'),
            'sim_sio' => $this->request->getPost('sim-sio'),
            'license_number' => $this->request->getPost('license-number'),
            'date_expired_request' => $this->request->getPost('date-expired-request'),
            'date_expired_sim_sio' => $this->request->getPost('date-expired-sim-sio'),
            'status_emp' => $this->request->getPost('status-emp'),
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
        ];

        return view('admin/employee/v_detail_employee', $this->data);
    }

    public function update()
    {
        $this->data = [
            'customerId' => $this->request->getPost('customer-id'),
            'company' => $this->request->getPost('company'),
            'pic' => $this->request->getPost('pic'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'customerStatus' => $this->request->getPost('customer-status'),
        ];
        $isSuccess = $this->serviceEmployee->updateEmployee($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data customer berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/employee');
    }
}
