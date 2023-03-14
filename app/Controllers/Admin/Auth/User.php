<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;
use App\Core\Services\ServiceUser;
use App\Models\ModelRefRole;
use App\Models\ModelStatus;

class User extends BaseController
{

    protected $serviceUser;
    protected $data;
    protected $modelRole;
    protected $modelStatus;

    public function __construct()
    {
        $this->serviceUser = new ServiceUser();
        $this->modelRole = new ModelRefRole();
        $this->modelStatus = new ModelStatus();
    }

    public function index()
    {
        return view('auth/user/v_user', $this->serviceUser->getUsers());
    }

    public function create()
    {
        $this->data = [
            'role' => $this->modelRole->asObject()->findAll(),
        ];
        return view('auth/user/v_add_user', $this->data);
    }

    public function store()
    {
        $this->data = [
            'frontName' => $this->request->getPost('front-name'),
            'backName' => $this->request->getPost('back-name'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'roleUser' => $this->request->getPost('role-name'),
        ];
        $isSuccess = $this->serviceUser->storeUser($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data user berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/user');
    }

    public function detail($id)
    {
        $this->data = [
            'role' => $this->modelRole->asObject()->findAll(),
            'user' => $this->serviceUser->getUserById($id),
            'status' => $this->modelStatus->asObject()->findAll(),
        ];

        return view('auth/user/v_detail_user', $this->data);
    }

    public function storeCredential()
    {
    }

    public function update()
    {
        $this->data = [
            'userId' => $this->request->getPost('user-id'),
            'frontName' => $this->request->getPost('front-name'),
            'backName' => $this->request->getPost('back-name'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'roleUser' => $this->request->getPost('role-name'),
            'status' => $this->request->getPost('status'),
        ];
        $isSuccess = $this->serviceUser->updateUser($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data user berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/user');
    }
}
