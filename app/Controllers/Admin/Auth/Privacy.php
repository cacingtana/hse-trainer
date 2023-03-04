<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;

class Privacy extends BaseController
{
    protected $data;

    public function index()
    {
        return view('auth/privacy/v_privacy');
    }

    public function update()
    {
    }
}
