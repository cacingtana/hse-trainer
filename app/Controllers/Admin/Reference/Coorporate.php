<?php

namespace App\Controllers\Admin\Reference;

use App\Controllers\BaseController;
use App\Models\ModelRefCoorporate;
use App\Core\Services\ServiceAuth;

class Coorporate extends BaseController
{
    protected $modelCoorporate;
    protected $data;
    protected $userActive;

    public function __construct()
    {
        $this->modelCoorporate = new ModelRefCoorporate();
        $this->userActive = new ServiceAuth();
    }
    public function index()
    {
        $this->data = [
            'coorporate' => $this->modelCoorporate->asObject()->findAll(),
        ];
        return view('admin/reference/coorporate/v_coorporate', $this->data);
    }
    public function store()
    {
        try {
            $this->data = [
                'coorporate_name' => $this->request->getPost('bu-name'),
                'ref_user_id' => $this->userActive->checkStatusLogin()['uid'],
            ];
            $isSuccess = $this->modelCoorporate->save($this->data);
            if ($isSuccess) {
                session()->setFlashdata('msg', ["success", "Data unit business berhasil di simpan"]);
            } else {
                session()->setFlashdata('msg', ["danger", "Gagal"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to('/inv-back/coorporate');
    }
}
