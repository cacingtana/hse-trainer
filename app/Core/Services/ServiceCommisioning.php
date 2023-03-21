<?php

namespace App\Core\Services;

use App\Models\ModelCommisioning;
use App\Models\ModelCommisioningDetail;
use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;

class ServiceCommisioning
{
    protected $commisioning;
    protected $commisioningDetail;
    protected $data = [];
    protected $userActive;
    protected $createDate;

    function __construct()
    {
        $this->commisioning = new ModelCommisioning();
        $this->commisioningDetail = new ModelCommisioningDetail();
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
    }

    function generateId()
    {
        return $this->commisioning->commisioningNumber();
    }

    function findById($idMachine)
    {
        try {
            return $this->commisioning->findById($idMachine);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getCommisining()
    {
        return $this->commisioning->getAllCommisioning();
    }

    function getCommisioningById($id)
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

    function getReportCommisioning()
    {
        try {
            return $this->commisioning->getReportCommisioning();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
