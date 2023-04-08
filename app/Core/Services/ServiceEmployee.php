<?php

namespace App\Core\Services;

use App\Models\ModelEmployee;
use App\Core\Services\ServiceAuth;
use CodeIgniter\I18n\Time;

class ServiceEmployee
{
    protected $modelEmployee;
    protected $data;
    protected $userActive;
    protected $createDate;

    function __construct()
    {
        $this->modelEmployee = new ModelEmployee();
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
    }

    function generateId()
    {
        return $this->modelEmployee->employeeNumber();
    }

    function getAllEmployee()
    {
        try {
            return $this->modelEmployee->getAllEmployee();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getEmployeeActive()
    {
        try {
            return $this->modelEmployee->asObject()->Where('status_emp', 1)->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getEmployeeJoinId($employeeId)
    {
        try {
            return $this->modelEmployee->getEmployeeById($employeeId);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getEmployeeId($employeeId)
    {
        try {
            return $this->modelEmployee->asObject()->where('id_emp', $employeeId)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function findById($nik)
    {
        try {
            return $this->modelEmployee->findById($nik);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function storeEmployee($data)
    {
        try {
            $this->data = $data;
            return $this->modelEmployee->save($this->data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function updateEmployee($id, $data)
    {
        try {
            return $this->modelEmployee->update($id, $data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
