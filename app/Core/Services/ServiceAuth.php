<?php

namespace App\Core\Services;

use App\Core\Auth\GenerateToken;
use App\Models\ModelAuthentication;
use App\Core\Auth\Credential;

class ServiceAuth
{
    protected $modelUser;
    protected $generate;
    protected $datauser;
    protected $verify;
    protected $cred;
    protected $modelAuthentication;

    public function __construct()
    {
        $this->modelAuthentication = new ModelAuthentication();
        $this->generate = new GenerateToken();
    }
    public function login($user)
    {
        $this->datauser = $this->modelAuthentication->getUserWithAuthentication($user['usr']);
        if (!$this->datauser) return false;
        $this->verify = password_verify($user['pwd'], $this->datauser->password);
        if (!$this->verify) return false;
        try {
            $this->generate->encoding($this->datauser);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function checkStatusLogin()
    {
        $this->cred = new Credential();
        $this->datauser = $this->cred->userOn();
        return $this->datauser;
    }
}
