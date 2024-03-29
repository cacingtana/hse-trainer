<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Core\Services\ServiceReference;
use App\Core\Services\ServiceEmployee;
use App\Core\Services\ServiceSimper;
use App\Core\Services\ServiceSimperDetail;
use App\Models\ModelVehicle;
use App\Models\ModelStatusRequest;
use App\Models\ModelStatusTest;
use App\Models\ModelRefEye;
use App\Models\ModelStatusViolation;

class Simper extends BaseController
{
    protected $data = [];
    protected $serviceReference;
    protected $serviceEmployee;
    protected $vehicle;
    protected $simper;
    protected $simperDetail;
    protected $statusRequest;
    protected $statusViolation;
    protected $statusTest;
    protected $statusEye;

    public function __construct()
    {
        $this->serviceReference = new ServiceReference();
        $this->serviceEmployee = new ServiceEmployee();
        $this->vehicle = new ModelVehicle();
        $this->simper = new ServiceSimper();
        $this->simperDetail = new ServiceSimperDetail();
        $this->statusRequest = new ModelStatusRequest();
        $this->statusViolation = new ModelStatusViolation();
        $this->statusTest = new ModelStatusTest();
        $this->statusEye = new ModelRefEye();
    }

    public function index()
    {
        if ($this->request->getPost()) {
            $this->data = [
                'employee' => $this->serviceEmployee->getAllEmployee(),
                'simper' => $this->simper->getHeaderByMetgodPostDate($this->request->getPost('start-date'), $this->request->getPost('end-date')),
            ];
        } else {
            $this->data = [
                'employee' => $this->serviceEmployee->getAllEmployee(),
                'simper' => $this->simper->getHeader(),
            ];
        }
        return view('user/simper/v_simper', $this->data);
    }

    public function create()
    {
        if ($this->simper->findById($this->request->getPost('id-emp'))) {
            session()->setFlashdata('msg', ["danger", "Karyawan sudah terdaftar"]);
            return redirect()->to('/simper');
        }
        $id = $this->simper->generateIdSimper();
        $this->data = [
            'vehicle' => $this->vehicle->asObject()->findAll(),
            'employee' => $this->serviceEmployee->getEmployeeJoinId($this->request->getPost('id-emp')),
        ];
        $data = [
            'id_simper' => $id,
            'employee_id' => $this->data['employee']->id_emp,
        ];
        $this->simper->storeHeader($data);
        return redirect()->to('/simper/detail/' . $id);
    }

    public function storeSimperDetail()
    {
        if ($this->simperDetail->findById($this->request->getPost('id-vehicle'), $this->request->getPost('id-simper'))) {
            session()->setFlashdata('msg', ["danger", "Unit sudah terdaftar"]);
            return redirect()->to('/simper/detail/' . $this->request->getPost('id-simper'));
        }

        $this->data = [
            'id_simper' => $this->request->getPost('id-simper'),
            'vehicle_id' => $this->request->getPost('id-vehicle'),
            'issue_date' => $this->request->getPost('issue-date'),
            "theory_test_date" => $this->request->getPost('theory-test-date'),
            "theory_test_value" => $this->request->getPost('theory-test-result'),
            "practice_test_date" => $this->request->getPost('practice-test-date'),
            "practice_test_value" => $this->request->getPost('practice-test-result'),
            "eye_test_date" => $this->request->getPost('eye-test-date'),
            "eye_test_value" => $this->request->getPost('eye-test-result'),
            'status_simper' => $this->request->getPost('status-simper'),
            'status_test' => $this->request->getPost('status-test'),
            'note' => $this->request->getPost('note'),
        ];

        $isSuccess = $this->simperDetail->storeDetail($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data berhasil di tambahkan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/simper/detail/' . $this->request->getPost('id-simper'));
    }

    public function detail($idEmp)
    {
        $this->data = [
            'violation' => $this->statusViolation->asObject()->findAll(),
            'test' => $this->statusTest->asObject()->findAll(),
            'status' => $this->statusRequest->asObject()->findAll(),
            'vehicle' => $this->vehicle->asObject()->findAll(),
            'simper' => $this->simper->getHeaderById($idEmp),
            'detail' => $this->simperDetail->getSimperDetailById($idEmp),
            'eye' => $this->statusEye->asObject()->findAll(),
        ];

        return view('user/simper/v_detail_simper', $this->data);
    }

    public function detail_detail($id)
    {
        $this->data = [
            'test' => $this->statusTest->asObject()->findAll(),
            'eye' => $this->statusEye->asObject()->findAll(),
            'status' => $this->statusRequest->asObject()->findAll(),
            'vehicle' => $this->vehicle->asObject()->findAll(),
            'detail' => $this->simperDetail->getSimperDetailDetailById($id),
        ];
        return view('user/simper/v_detail', $this->data);
    }

    public function update_detail_detail()
    {
        $this->data = [
            'vehicle_id' => $this->request->getPost('id-vehicle'),
            'issue_date' => $this->request->getPost('issue-date'),
            'expire_date' => $this->request->getPost('expire-date'),
            "theory_test_date" => $this->request->getPost('theory-test-date'),
            "theory_test_value" => $this->request->getPost('theory-test-result'),
            "practice_test_date" => $this->request->getPost('practice-test-date'),
            "practice_test_value" => $this->request->getPost('practice-test-result'),
            "eye_test_date" => $this->request->getPost('eye-test-date'),
            "eye_test_value" => $this->request->getPost('eye-test-result'),
            'status_simper' => $this->request->getPost('status-simper'),
            'status_test' => $this->request->getPost('status-test'),
            'note' => $this->request->getPost('note'),
        ];
        $isSuccess = $this->simperDetail->updateDetail($this->request->getPost('id-detail'), $this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data berhasil di tambahkan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/simper/detail/' . $this->request->getPost('id-simper'));
    }

    public function updateViolation()
    {
        $this->data = [
            'status_violation' => $this->request->getPost('status-violation'),
        ];
        $isSuccess = $this->simper->updateHeaderViolation($this->request->getPost('id-simper'), $this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data pelanggaran berhasil di ubah"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/simper/detail/' . $this->request->getPost('id-simper'));
    }

    public function deleteSimperDetail()
    {
        try {
            $this->simperDetail->deleteSimperDetail(intval($this->request->getPost('id-detail')));
            session()->setFlashdata('msg', ["success", "Data berhasil di hapus"]);
            return redirect()->to('/simper/detail/' . $this->request->getPost('id-simper'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function printSimper($idEmp)
    {
        $this->data = [
            'simper' => $this->simper->getHeaderById($idEmp),
            'detail' => $this->simperDetail->getSimperDetailById($idEmp),
        ];
        //dd($this->data);
        return view('user/simper/v_print_simper', $this->data);
    }
}
