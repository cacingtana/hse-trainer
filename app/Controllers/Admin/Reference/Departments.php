<?php

namespace App\Controllers\Admin\Reference;

use App\Controllers\BaseController;
use App\Models\ModelDepartments;
use App\Core\Services\ServiceAuth;

class Departments extends BaseController
{
    protected $modelDepartments;
    protected $data;
    protected $userActive;

    public function __construct()
    {
        $this->modelDepartments = new ModelDepartments();
        $this->userActive = new ServiceAuth();
    }
    public function index()
    {
        $this->data = [
            'departments' => $this->modelDepartments->asObject()->findAll(),
        ];
        return view('admin/reference/departments/v_departments', $this->data);
    }
    public function store()
    {
        try {
            $this->data = [
                'dept_name' => $this->request->getPost('dept-name'),
                'ref_user_id' => $this->userActive->checkStatusLogin()['uid'],
            ];
            $isSuccess = $this->modelDepartments->save($this->data);
            if ($isSuccess) {
                session()->setFlashdata('msg', ["success", "Departemen berhasil di simpan"]);
            } else {
                session()->setFlashdata('msg', ["danger", "Gagal"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to('/inv-back/departments');
    }
}
