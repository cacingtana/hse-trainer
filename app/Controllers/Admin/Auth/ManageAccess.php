<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;
use App\Core\Services\ServiceManagementAccess;

class ManageAccess extends BaseController
{
    protected $serviceManageAccess;
    protected $data = [];
    protected $value = 0;

    public function __construct()
    {
        $this->serviceManageAccess = new ServiceManagementAccess();
    }

    public function index($id)
    {
        $this->data = [
            'user' => $this->serviceManageAccess->getCredential($id),
            'access' => $this->serviceManageAccess->getAccessByUserId($id),
        ];
        return view('auth/manage-access/v_manage_access', $this->data);
    }

    public function storeCredential()
    {
        $this->data = [
            'userName' => $this->request->getPost('user-name'),
            'passWord' => $this->request->getPost('pass-word'),
            'userId' => $this->request->getPost('user-id'),
        ];
        $isSuccess = $this->serviceManageAccess->saveCredential($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data User berhasil dibuat"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/user');
    }

    public function updateCredential()
    {
        $this->data = [
            'userName' => $this->request->getPost('user-name'),
            'passWord' => $this->request->getPost('pass-word'),
            'userId' => $this->request->getPost('user-id'),
        ];
        $isSuccess = $this->serviceManageAccess->updateCredential($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data credential berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/user');
    }
}
