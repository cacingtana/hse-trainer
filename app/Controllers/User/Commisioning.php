<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelRefCoorporate;
use App\Models\ModelDepartments;
use App\Models\ModelVehicle;
use App\Core\Services\ServiceCommisioning;

class Commisioning extends BaseController
{
    protected $data = [];
    protected $vehicle;
    protected $serviceEmployee;
    protected $rules = [];
    protected $coorporate;
    protected $departments;
    protected $commisioning;

    public function __construct()
    {
        $this->coorporate = new ModelRefCoorporate();
        $this->departments = new ModelDepartments();
        $this->commisioning = new ServiceCommisioning();
        $this->vehicle = new ModelVehicle();
    }

    public function index()
    {
        $this->data = [
            'comm' => $this->commisioning->getCommisining(),
        ];
        return view('user/commisioning/v_commisioning', $this->data);
    }

    public function create()
    {
        $this->data = [
            'vehicle' => $this->vehicle->asObject()->findAll(),
            'bu' => $this->coorporate->asObject()->findAll(),
            'dept' => $this->departments->asObject()->findAll(),
        ];
        return view('user/commisioning/v_add_commisioning', $this->data);
    }

    public function store()
    {
        $this->data = [
            "id_commisioning" => $this->commisioning->generateId(),
            "no_unit" => $this->request->getPost('no-unit'),
            "no_mesin" => $this->request->getPost('no-machine'),
            "type_unit" => $this->request->getPost('type-unit'),
            "ref_coorporate_id" => $this->request->getPost('ref-coorporate-id'),
            "ref_department_id" => $this->request->getPost('ref-department-id'),
            "date_commisioning" => $this->request->getPost('date-comm'),
            "date_expired_commisioning" => $this->request->getPost('date-expire-comm'),
            "hm_km" => $this->request->getPost('hm-km'),
            "plant" => $this->request->getPost('plant'),
            "safety" => $this->request->getPost('safety'),
            "trainer" => $this->request->getPost('trainer'),
            "informasi" => $this->request->getPost('information'),
            "keterangan" => $this->request->getPost('note'),
        ];
        $isSuccess = $this->commisioning->store($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/commisioning');
    }

    public function detail($idEmp)
    {
    }

    public function addCartProductTransactionOut()
    {
    }

    public function delete($id)
    {
    }
}
