<?php

namespace App\Controllers;

use App\Core\Services\ServiceAuth;
use App\Models\ModelSimper;
use App\Models\ModelCommisioning;

class Home extends BaseController
{

    protected $userAktif;
    protected $simper;
    protected $commisioning;
    protected $data = [];

    public function index()
    {
        $this->userAktif = new ServiceAuth();
        $this->simper = new ModelSimper();
        $this->commisioning = new ModelCommisioning();

        $session = \Config\Services::session();
        if ($this->userAktif->checkStatusLogin()) {
            $session->set("profile", [
                'uid' => $this->userAktif->checkStatusLogin()['uid'],
                'role' => $this->userAktif->checkStatusLogin()['role'],
                'fullname' => $this->userAktif->checkStatusLogin()['name'],
            ]);
        }
        $this->data = [
            'simperTki' => $this->simper->totalSimper(1),
            'simperTka' => $this->simper->totalSimper(2),
            'commisioning' => $this->commisioning->totalCommisioning(),
        ];
        return view('home', $this->data);
    }
}
