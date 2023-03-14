<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;
use App\Core\Services\ServiceManagementAccess;

class ManageAccess extends BaseController
{
    protected $serviceManageAccess;
    protected $data;
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

    public function detail()
    {
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

    public function storeAccess()
    {
        function cek($request)
        {
            if ($request == "on") {
                return 1;
            } else {
                return 0;
            };
        }
        $this->data = [
            'purchase' => cek($this->request->getPost('purchase')),
            'receive' => cek($this->request->getPost('receive')),
            'stock-management' => cek($this->request->getPost('stock-management')),
            'r-trans-in' => cek($this->request->getPost('r-trans-in')),
            'r-trans-out' => cek($this->request->getPost('r-trans-out')),
            'stock' => cek($this->request->getPost('stock')),
            'user' => cek($this->request->getPost('user')),
            'level' => cek($this->request->getPost('level')),
            'payment' => cek($this->request->getPost('payment')),
            'shipment' => cek($this->request->getPost('shipment')),
            'product' => cek($this->request->getPost('product')),
            'customer' => cek($this->request->getPost('customer')),
            'supplier' => cek($this->request->getPost('supplier')),
            'category' => cek($this->request->getPost('category')),
            'unit' => cek($this->request->getPost('unit')),
            'taxes' => cek($this->request->getPost('taxes')),
            'discount' => cek($this->request->getPost('discount')),
            'id-user' => cek($this->request->getPost('id-user')),
        ];
        $isSuccess = $this->serviceManageAccess->updateAccessUserById($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Modul akses berhasil update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/user');
    }
}
