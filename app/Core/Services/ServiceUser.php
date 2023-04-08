<?php

namespace App\Core\Services;

use App\Models\ModelUser;
use App\Models\ModelAuthentication;

class ServiceUser
{
    protected $modelUser;
    protected $modelCredential;
    protected $user = [];

    protected $active = 1;

    function __construct()
    {
        $this->modelUser = new ModelUser();
        $this->modelCredential = new ModelAuthentication();
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

            $idUser = $this->modelUser->userNumber();
            $this->user = [
                'users_id' => $idUser,
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
                $data = [
                    'ref_user_id' => $idUser,
                ];
                $this->modelCredential->save($data);
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
