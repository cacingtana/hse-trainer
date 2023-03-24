<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelStatus;
use App\Models\ModelVehicle;
use App\Core\Services\ServiceReference;

class Vehicle extends BaseController
{
    protected $data;
    protected $modelStatus;
    protected $validation;
    protected $vehicle;
    protected $session;
    protected $serviceReference;
    protected $rules = [
        'vehicle-name' => 'required',
    ];

    function __construct()
    {
        $this->modelStatus = new ModelStatus();
        $this->serviceReference = new ServiceReference();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->vehicle = new ModelVehicle();
    }

    public function index()
    {
        $this->data = [
            'vehicle' => $this->vehicle->asObject()->findAll(),
        ];
        return view('admin/vehicle/v_vehicle', $this->data);
    }

    public function create()
    {
        $this->data = [
            'validation' => $this->validation,
            'vehicle' => $this->vehicle->asObject()->findAll(),
        ];
        return view('admin/vehicle/v_add_vehicle', $this->data);
    }

    public function store()
    {

        if (!$this->validate($this->rules)) {
            return redirect()->to('/inv-back/vehicle/create')->withInput()->with('validation', $this->validation);
        }

        $this->data = [
            'unit_name' => $this->request->getPost('vehicle-name'),
            'note' => $this->request->getPost('vehicle-desc'),
        ];
        $isSuccess = $this->vehicle->save($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data produk berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/vehicle');
    }

    public function detail($id)
    {
        $this->data = [
            'vehicle' => $this->vehicle->asObject()->where('id', $id)->first(),
        ];
        return view('admin/vehicle/v_detail_vehicle', $this->data);
    }

    public function update()
    {
        $this->data = [
            'unit_name' => $this->request->getPost('unit-name'),
            'note' => $this->request->getPost('note'),
        ];
        $isSuccess = $this->vehicle->update($this->request->getPost('vehicle-id'), $this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data unit berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/vehicle');
    }
}
