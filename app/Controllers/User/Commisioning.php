<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelRefCoorporate;
use App\Models\ModelDepartments;
use App\Models\ModelVehicle;
use App\Core\Services\ServiceCommisioning;
use App\Core\Services\ServiceCommisioningDetail;
use App\Models\ModelSex;

class Commisioning extends BaseController
{
    protected $data = [];
    protected $vehicle;
    protected $serviceEmployee;
    protected $rules = [];
    protected $coorporate;
    protected $departments;
    protected $commisioning;
    protected $commisioningDetail;
    protected $sex;

    public function __construct()
    {
        $this->coorporate = new ModelRefCoorporate();
        $this->departments = new ModelDepartments();
        $this->commisioning = new ServiceCommisioning();
        $this->commisioningDetail = new ServiceCommisioningDetail();
        $this->vehicle = new ModelVehicle();
        $this->sex = new ModelSex();
    }

    public function index()
    {
        $this->data = [
            'comm' => $this->commisioning->getCommisining(),
            'sex' => $this->sex->asObject()->findAll(),
            'vehicle' => $this->vehicle->asObject()->findAll(),
            'bu' => $this->coorporate->asObject()->findAll(),
            'dept' => $this->departments->asObject()->findAll(),
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

    public function storeHeader()
    {
        $idCommisioning = $this->commisioning->generateId();
        $this->data = [
            "id_commisioning" => $idCommisioning,
            "no_unit" => $this->request->getPost('no-unit'),
            "no_mesin" => $this->request->getPost('no-machine'),
            "type_unit" => $this->request->getPost('ref-vehicle-id'),
            "ref_coorporate_id" => $this->request->getPost('ref-coorporate-id'),
            "ref_department_id" => $this->request->getPost('ref-department-id'),
        ];
        $this->commisioning->store($this->data);
        return redirect()->to('/commisioning/detail/' . $idCommisioning);
    }

    public function storeCommisioningDetail()
    {
        $this->data = [
            "type_commisioning" => $this->request->getPost('type'),
            "date_commisioning" => $this->request->getPost('start-date'),
            "date_expired_commisioning" => $this->request->getPost('end-date'),
            "hm_km" => $this->request->getPost('hm-km'),
            "plant" => $this->request->getPost('plant'),
            "safety" => $this->request->getPost('safety'),
            "trainer" => $this->request->getPost('trainer'),
            "informasi" => $this->request->getPost('information'),
            "keterangan" => $this->request->getPost('note'),
        ];
        $isSuccess = $this->commisioningDetail->storeDetail($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }

        $idCommisioning = "CM23030900001";
        return redirect()->to('/commisioning/detail/' . $idCommisioning);
    }

    public function detail($id)
    {
        $this->data = [
            'header' => $this->commisioning->getCommisioningById($id),
            'detail' => $this->commisioningDetail->getCommisiningDetailById($id),
        ];


        return view('user/commisioning/v_detail_commisioning', $this->data);
    }

    public function addCartProductTransactionOut()
    {
    }
}
