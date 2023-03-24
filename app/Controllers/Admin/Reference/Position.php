<?php

namespace App\Controllers\Admin\Reference;

use App\Controllers\BaseController;
use App\Models\ModelPosition;

class Position extends BaseController
{
    protected $data;
    protected $userActive;
    protected $position;


    public function __construct()
    {
        $this->position = new ModelPosition();
    }
    public function index()
    {
        $this->data = [
            'position' => $this->position->asObject()->findAll(),
        ];
        return view('admin/reference/position/v_position', $this->data);
    }

    public function store()
    {
        try {
            $this->data = [
                'position_name' => $this->request->getPost('position-name'),
            ];
            $isSuccess = $this->position->save($this->data);
            if ($isSuccess) {
                session()->setFlashdata('msg', ["success", "Posisi berhasil di simpan"]);
            } else {
                session()->setFlashdata('msg', ["danger", "Gagal"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to('/inv-back/position');
    }
}
