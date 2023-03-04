<?php

namespace App\Core\Services;

use App\Models\ModelUser;

class ServiceUser
{
    protected $modelUser;
    protected $user = [];

    protected $active = 1;

    function __construct()
    {
        $this->modelUser = new ModelUser();
    }

    function getUsers()
    {
        try {
            $this->user = [
                'users' => $this->modelUser->asObject()->findAll(),
            ];
            return $this->user;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function getUserById($userId)
    {
        try {
            return $this->modelUser->asObject()->where('users_id', $userId)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeUser($dataUser)
    {
        try {
            $cekEmail = $this->modelUser->where('email', $dataUser['email'])->first();
            if ($cekEmail) {
                return false;
            }
            $this->user = [
                'users_id' => $this->modelUser->userNumber(),
                'first_name' => $dataUser['frontName'],
                'last_name' => $dataUser['backName'],
                'address' => $dataUser['address'],
                'phone' => $dataUser['phone'],
                'email' => $dataUser['email'],
                'user_status' => $this->active,
                'ref_role_id' => $dataUser['roleUser'],
            ];
            $isSuccess = $this->modelUser->save($this->user);
            if ($isSuccess) {
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function updateUser($dataUser)
    {
        try {
            $this->user = [
                'users_id' => $dataUser['userId'],
                'first_name' => $dataUser['frontName'],
                'last_name' => $dataUser['backName'],
                'address' => $dataUser['address'],
                'phone' => $dataUser['phone'],
                'email' => $dataUser['email'],
                'user_status' => $dataUser['status'],
                'ref_role_id' => $dataUser['roleUser'],
            ];

            $isSuccess = $this->modelUser->update($dataUser['userId'], $this->user);
            if ($isSuccess) {
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function deleteUser($id)
    {
    }
}
