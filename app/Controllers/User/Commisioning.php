<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelRefCoorporate;
use App\Models\ModelDepartments;
use App\Models\ModelVehicle;
use App\Core\Services\ServiceCommisioning;
use App\Core\Services\ServiceCommisioningDetail;
use App\Models\ModelSex;
use App\Models\ModelStatusTest;

class Commisioning extends BaseController
{
    protected $data = [];
    protected $vehicle;
    protected $serviceEmployee;
    protected $coorporate;
    protected $departments;
    protected $commisioning;
    protected $commisioningDetail;
    protected $sex;
    protected $statusTest;

    public function __construct()
    {
        $this->coorporate = new ModelRefCoorporate();
        $this->departments = new ModelDepartments();
        $this->commisioning = new ServiceCommisioning();
        $this->commisioningDetail = new ServiceCommisioningDetail();
        $this->vehicle = new ModelVehicle();
        $this->sex = new ModelSex();
        $this->statusTest = new ModelStatusTest();
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

        // dd($this->data);
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
        if ($this->commisioning->findById($this->request->getPost('no-machine'))) {
            session()->setFlashdata('msg', ["danger", "Unit/No Mesin sudah terdaftar"]);
            return redirect()->to('/commisioning');
        }
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
            "commisioning_id" => $this->request->getPost('id-commisioning'),
            "type_commisioning" => $this->request->getPost('type'),
            "date_commisioning" => $this->request->getPost('start-date'),
            "date_expired_commisioning" => $this->request->getPost('end-date'),
            "hm_km" => $this->request->getPost('hm-km'),
            "plant" => $this->request->getPost('plant'),
            "safety" => $this->request->getPost('safety'),
            "trainer" => $this->request->getPost('trainer'),
            "informasi" => $this->request->getPost('information'),
            "note" => $this->request->getPost('note'),
            "status_test" => $this->request->getPost('status-test'),
        ];
        $isSuccess = $this->commisioningDetail->storeDetail($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/commisioning/detail/' . $this->request->getPost('id-commisioning'));
    }

    public function detail($id)
    {
        $this->data = [
            'test' => $this->statusTest->asObject()->findAll(),
            'header' => $this->commisioning->getCommisioningById($id),
            'detail' => $this->commisioningDetail->getCommisiningDetailById($id),
        ];
        return view('user/commisioning/v_detail_commisioning', $this->data);
    }

    public function detail_detail($id)
    {
        $this->data = [
            'test' => $this->statusTest->asObject()->findAll(),
            'detail' => $this->commisioningDetail->getCommisioningDetailDetailById($id),
        ];
        return view('user/commisioning/v_detail', $this->data);
    }

    public function update_detail_detail()
    {
        $this->data = [
            "date_commisioning" => $this->request->getPost('start-date'),
            "date_expired_commisioning" => $this->request->getPost('end-date'),
            "hm_km" => $this->request->getPost('hm-km'),
            "plant" => $this->request->getPost('plant'),
            "safety" => $this->request->getPost('safety'),
            "trainer" => $this->request->getPost('trainer'),
            "informasi" => $this->request->getPost('information'),
            "note" => $this->request->getPost('note'),
            "status_test" => $this->request->getPost('status-test'),
        ];

        $isSuccess = $this->commisioningDetail->updateDetail($this->request->getPost('id-commisioning'), $this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/commisioning/detail-detail/' . $this->request->getPost('id-commisioning'));
    }

    function update_no_unit()
    {
        $this->data = [
            "no_unit" => $this->request->getPost('no-unit'),
        ];
        $isSuccess = $this->commisioning->update($this->data, $this->request->getPost('id-commisioning'));
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }

        return redirect()->to('/commisioning/detail/' . $this->request->getPost('id-commisioning'));
    }

    function update_no_mesin()
    {
        $this->data = [
            "no_mesin" => $this->request->getPost('no-mesin'),
        ];
        $isSuccess = $this->commisioning->update($this->data, $this->request->getPost('id-commisioning'));
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data Commisioning berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/commisioning/detail/' . $this->request->getPost('id-commisioning'));
    }
}
