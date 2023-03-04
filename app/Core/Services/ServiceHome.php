<?php

namespace App\Core\Services;
use App\Models\ModelProductStock;

class ServiceHome
{
    protected $data = [];
    protected $modelProductStock;

    public function __construct()
    {
        $this->modelProductStock = new ModelProductStock();
    }

    public function index(){
        
    }
}