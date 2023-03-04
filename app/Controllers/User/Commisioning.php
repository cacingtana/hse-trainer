<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Core\Services\ServiceReference;
use App\Core\Services\ServiceEmployee;

class Commisioning extends BaseController
{
    protected $data = [];
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
        return view('user/commisioning/v_commisioning', $this->data);
    }

    public function create()
    {
    }

    public function detail($idEmp)
    {
    }
    //Cart ------------------------------------------------------------------------------------------------------
    public function addCartProductTransactionOut()
    {
    }

    public function delete($id)
    {
    }

    //Cart ------------------------------------------------------------------------------------------------------
    public function store()
    {
    }
}
