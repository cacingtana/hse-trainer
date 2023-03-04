<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Core\Services\ServiceReference;
use App\Core\Services\ServiceEmployee;

class Simper extends BaseController
{
    protected $data;
    protected $cart;
    protected $serviceReference;
    protected $serviceEmployee;
    protected $rules = [];

    public function __construct()
    {
        $this->serviceReference = new ServiceReference();
        $this->serviceEmployee = new ServiceEmployee();
    }

    public function index()
    {
        $this->data = [
            'employee' => $this->serviceEmployee->getAllEmployee(),
        ];
        return view('user/simper/v_simper', $this->data);
    }

    public function create()
    {
    }

    public function detail($idEmp)
    {
    }

    public function addCartProductTransactionOut()
    {
    }

    public function delete($id)
    {
    }

    public function store()
    {
    }
}
