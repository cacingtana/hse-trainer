<?php

namespace App\Core\Services;

use App\Models\ModelAuthentication;
use App\Core\Auth\GenerateToken;
use App\Models\ModelAccessManagement;
use CodeIgniter\I18n\Time;
use App\Core\Services\ServiceAuth;

class ServiceManagementAccess
{
    protected $modelAuthentication;
    protected $modeAccess;
    protected $token;
    protected $user = [];
    protected $userActive;
    protected $createDate;


    function __construct()
    {
        $this->modeAccess = new ModelAccessManagement();
        $this->modelAuthentication = new ModelAuthentication();
        $this->token = new GenerateToken();
        $this->userActive = new ServiceAuth();
        $this->createDate = Time::now('Asia/Jakarta', 'id_ID');
    }

    public function getAccessByUserId($id)
    {
        return  $this->modeAccess->getAccessByUserId($id);
    }

    public function getCredential($id)
    {
        return $this->modelAuthentication->getUserAuthenticationWithId($id);
    }

    public function saveCredential($dataUser)
    {
        try {
            $cekEmail = $this->modelAuthentication->where('username', $dataUser['userName'])->first();
            if ($cekEmail) {
                return false;
            }
            $passwordHash =  password_hash($dataUser['passWord'], PASSWORD_BCRYPT);
            $this->user = [
                'username' => $dataUser['userName'],
                'password' => $passwordHash,
                'ref_user_id' => $dataUser['userId'],
            ];
            $this->modelAuthentication->save($this->user);
            $this->modeAccess->save([
                'ref_user_id' => $dataUser['userId'],
                'created_at' => $this->createDate->toDateTimeString(),
            ]);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function updateCredential($dataUser)
    {
        try {
            $passwordHash =  password_hash($dataUser['passWord'], PASSWORD_BCRYPT);
            $this->user = [
                'username' => $dataUser['userName'],
                'password' => $passwordHash,
                'ref_user_id' => $dataUser['userId'],
            ];
        } catch (\Throwable $th) {
            throw $th;
        }
    }



    function updateAccessUserById($access)
    {
        try {
            $this->user = [
                'purchase' => $access['purchase'],
                'receive' => $access['receive'],
                'stock_management' => $access['stock-management'],
                'r_trans_in' => $access['r-trans-in'],
                'r_trans_out' => $access['r-trans-out'],
                'product' => $access['product'],
                'customer' => $access['customer'],
                'supplier' => $access['supplier'],
                'category' => $access['category'],
                'unit' => $access['unit'],
                'payment' => $access['payment'],
                'shipment' => $access['shipment'],
                'taxes' => $access['taxes'],
                'discount' => $access['discount'],
                'users' => $access['user'],
                'level' => $access['level'],
                'ref_administrator_id' => $this->userActive->checkStatusLogin()['uid'],
                'updated_at' => $this->createDate->toDateTimeString(),
            ];
            $this->modeAccess->update($access['id-user'], $this->user);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
