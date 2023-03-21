<?php

namespace App\Core\Services;

use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;
use App\Models\ModelSimper;

class ServiceSimper
{
    protected $modelEmployee;
    protected $data;
    protected $userActive;
    protected $createDate;
    protected $simper;

    function __construct()
    {
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
        $this->simper = new ModelSimper();
    }

    function generateIdSimper()
    {
        return $this->simper->simperNumber();
    }

    function findById($id)
    {
        try {
            return $this->simper->asObject()->where('employee_id', $id)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getHeader()
    {
        try {
            return $this->simper->getSimper();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getHeaderByMetgodPostDate($start, $end)
    {
        try {
            return $this->simper->getSimperByPostDate($start, $end);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getHeaderById($id)
    {
        try {
            return $this->simper->getSimperById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getHeaderWithDetailById($id)
    {
        try {
            return $this->simper->getSimperById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function updateHeaderViolation($id, $data)
    {
        try {
            return $this->simper->update($id, $data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function storeHeader($data)
    {
        try {
            return $this->simper->save($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getReportSimper()
    {
        try {
            return $this->simper->getReportSimper();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
