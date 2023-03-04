<?php

namespace App\Controllers\Admin\Reference;

use App\Controllers\BaseController;
use App\Models\ModelRefCategory;
use App\Core\Services\ServiceAuth;

class Category extends BaseController
{
    protected $modelCategory;
    protected $data;
    protected $userActive;

    public function __construct()
    {
        $this->modelCategory = new ModelRefCategory();
        $this->userActive = new ServiceAuth();
    }
    public function index()
    {
        $this->data = [
            'category' => $this->modelCategory->asObject()->findAll(),
        ];
        return view('admin/reference/category/v_category', $this->data);
    }
    public function store()
    {
        try {
            $this->data = [
                'category_name' => $this->request->getPost('category-name'),
                'ref_user_id' => $this->userActive->checkStatusLogin()['uid'],
            ];
            $isSuccess = $this->modelCategory->save($this->data);
            if ($isSuccess) {
                session()->setFlashdata('msg', ["success", "Kategori berhasil di simpan"]);
            } else {
                session()->setFlashdata('msg', ["danger", "Gagal"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to('/inv-back/category');
    }
}
