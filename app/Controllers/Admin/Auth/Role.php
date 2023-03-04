<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;
use App\Models\ModelRefRole;

class Role extends BaseController
{
    protected $modelRole;
    protected $data;

    public function index()
    {
        $this->modelRole = new ModelRefRole();
        $this->data = [
            'role' => $this->modelRole->asObject()->findAll(),
        ];
        return view('auth/role/v_role', $this->data);
    }

    public function store()
    {
        try {
            $this->modelRole = new ModelRefRole();
            $this->data = [
                'role_name' => $this->request->getPost('role-name'),
                'description' => $this->request->getPost('role-description'),
                'ref_user_id' => "A001",
            ];
            $isSuccess = $this->modelRole->save($this->data);
            if ($isSuccess) {
                session()->setFlashdata('msg', ["success", "Data pengajuan cuti berhasil di ajukan"]);
            } else {
                session()->setFlashdata('msg', ["danger", "Gagal"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to('/inv-back/role');
    }

    public function detail()
    {
    }
}
