<?php

namespace App\Controllers\Restful;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Core\Services\ServiceProductStock;

class Products extends ResourceController
{
    use ResponseTrait;

    protected $serviceProductStock;

    public function getProductId($id)
    {
        $this->serviceOrder = new ServiceProductStock();
        $data = $this->serviceOrder->getProductStockById($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Data Found with id ');
        }
    }
}
