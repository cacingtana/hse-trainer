<?php

namespace App\Controllers;

use App\Core\Services\ServiceAuth;

class Home extends BaseController
{
    protected $userAktif;
    public function index()
    {
        $this->userAktif = new ServiceAuth();
        $session = \Config\Services::session();
        if ($this->userAktif->checkStatusLogin()) {
            $session->set("profile", [
                'uid' => $this->userAktif->checkStatusLogin()['uid'],
                'role' => $this->userAktif->checkStatusLogin()['role'],
                'fullname' => $this->userAktif->checkStatusLogin()['name'],
            ]);
        }
        return view('home');
    }
}
