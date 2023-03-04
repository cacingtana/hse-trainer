<?php

namespace App\Controllers;

use App\Core\Auth\Credential;
use App\Core\Services\ServiceAuth;

class Auth extends BaseController
{

    protected $login;
    protected $Session;
    protected $interfaceAuth;
    protected $user;
    protected $aktif;
    protected $data = [];

    protected $rules = [
        'user-name' => 'required',
        'pass-word' => 'required',
    ];

    public function index()
    {
        $this->user = new Credential();
        $this->aktif = $this->user->userOn();
        if ($this->aktif != null) {
            return redirect()->to('/dashboard');
        }
        return view('auth/login');
    }
    public function login()
    {
        $this->interfaceAuth = new ServiceAuth();
        if (!$this->validate($this->rules)) return redirect()->to('/');
        $this->data = [
            'usr' => $this->request->getPost('user-name'),
            'pwd' => $this->request->getPost('pass-word'),
        ];
        $isLogin = $this->interfaceAuth->login($this->data);
        if (!$isLogin) {
            session()->setFlashdata('msg', "Login Gagal...!");
            return redirect()->to('/');
        }
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('/');
    }
}
