<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelRefCategory;
use App\Models\ModelStatus;
use App\Core\Services\ServiceReference;

class Vehicle extends BaseController
{
    protected $data;
    protected $modelCategory;
    protected $modelStatus;
    protected $serviceProduct;
    protected $validation;
    protected $session;
    protected $serviceReference;
    protected $rules = [
        'product-name' => 'required',
        'product-category' => 'required',
    ];

    function __construct()
    {
        $this->modelCategory = new ModelRefCategory();
        $this->modelStatus = new ModelStatus();
        $this->serviceReference = new ServiceReference();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('admin/product/v_product', $this->serviceProduct->getProducts());
    }

    public function create()
    {
        $this->data = [
            'category' => $this->modelCategory->asObject()->findAll(),
            'validation' => $this->validation,
        ];
        return view('admin/product/v_add_product', $this->data);
    }

    public function store()
    {

        if (!$this->validate($this->rules)) {
            return redirect()->to('/inv-back/product/create')->withInput()->with('validation', $this->validation);
        }

        $this->data = [
            'name' => $this->request->getPost('product-name'),
            'description' => $this->request->getPost('product-description'),
            'categoryId' => $this->request->getPost('product-category'),
        ];
        $isSuccess = $this->serviceProduct->storeProduct($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data produk berhasil di simpan"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/product');
    }

    public function detail($id)
    {
        $this->data = [
            'status' => $this->modelStatus->asObject()->findAll(),
            'category' => $this->modelCategory->asObject()->findAll(),
            'product' => $this->serviceProduct->getProductById($id),
            'status' => $this->serviceReference->getStatus(),
        ];
        return view('admin/product/v_detail_product', $this->data);
    }

    public function update()
    {
        $this->data = [
            'productId' => $this->request->getPost('product-id'),
            'name' => $this->request->getPost('product-name'),
            'description' => $this->request->getPost('product-description'),
            'status' => $this->request->getPost('product-status'),
            'categoryId' => $this->request->getPost('product-category'),
        ];
        $isSuccess = $this->serviceProduct->updateProduct($this->data);
        if ($isSuccess) {
            session()->setFlashdata('msg', ["success", "Data produk berhasil di update"]);
        } else {
            session()->setFlashdata('msg', ["danger", "Gagal"]);
        }
        return redirect()->to('/inv-back/product');
    }
}
