<?php

namespace App\Core\Services;

use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;
use App\Models\ModelSimperDetail;

class ServiceSimperDetail
{
    protected $data;
    protected $userActive;
    protected $createDate;
    protected $simperDetail;

    function __construct()
    {
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
        $this->simperDetail = new ModelSimperDetail();
    }

    function storeDetail($data)
    {
        try {
            return $this->simperDetail->save($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function findById($idVehicle, $idSimper)
    {
        try {
            return $this->simperDetail->findById($idSimper, $idVehicle);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getSimperDetailById($id)
    {
        try {
            return $this->simperDetail->getSimperDetailById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getSimperDetailDetailById($id)
    {
        try {
            return $this->simperDetail->getSimperDetailDetailById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function deleteSimperDetail($id)
    {
        try {
            return $this->simperDetail->where('id', $id)->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
