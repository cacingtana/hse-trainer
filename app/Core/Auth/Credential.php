<?php

namespace App\Core\Auth;

use App\Core\Auth\GenerateToken;

class Credential
{
    protected $instJWT;
    protected $data;

    public function isLogin($token)
    {
        $this->instJWT = new GenerateToken();
        $this->data = $this->instJWT->decoding($token);
        $data = [
            'uid' => $this->data->uid,
            'role' => $this->data->role,
            'name' => $this->data->name,
        ];
        return $data;
    }

    public function userOn()
    {
        try {
            $session = \Config\Services::session();
            $data = $session->get("credential-app");
            return $this->isLogin($data['token']);
        } catch (\Throwable $th) {
            return  "";
        }
    }
}
