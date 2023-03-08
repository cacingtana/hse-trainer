<?php

namespace App\Core\Services;

use App\Models\ModelCommisioningDetail;
use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;

class ServiceCommisioningDetail
{
    protected $commisioning;
    protected $data = [];
    protected $userActive;
    protected $createDate;

    function __construct()
    {
        $this->commisioning = new ModelCommisioningDetail();
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
    }

    function getCommisining()
    {
        return $this->commisioning->getAllCommisioning();
    }

    function getCommisiningDetailById($id)
    {
        return $this->commisioning->getCommisioningDetailById($id);
    }

    public function storeDetail($data)
    {
        try {
            return $this->commisioning->save($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
