<?php

namespace App\Core\Services;

use App\Models\ModelCommisioning;
use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;

class ServiceCommisioning
{
    protected $commisioning;
    protected $data = [];
    protected $userActive;
    protected $createDate;

    function __construct()
    {
        $this->commisioning = new ModelCommisioning();
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
    }

    function generateId()
    {
        return $this->commisioning->commisioningNumber();
    }

    function getCommisining()
    {
        return $this->commisioning->getAllCommisioning();
    }

    function getCommisiningById($id)
    {
        return $this->commisioning->getCommisioningById($id);
    }

    public function store($data)
    {
        try {
            return $this->commisioning->save($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
