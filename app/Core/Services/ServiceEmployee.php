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

    function storeEmployee($data)
    {
        try {
            $this->data = $data;
            return $this->modelEmployee->save($this->data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function updateEmployee($data)
    {
        try {
            $this->data = [
                'company_name' => $data['company'],
                'pic' => $data['pic'],
                'customer_address' => $data['address'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'customer_status' => $data['customerStatus'],
                'ref_user_id' =>  $this->userActive->checkStatusLogin()['uid'],
                'updated_at' =>  $this->createDate->toDateTimeString(),
            ];
            $this->modelEmployee->update($data['customerId'], $this->data);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
