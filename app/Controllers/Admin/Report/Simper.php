<?php

namespace App\Controllers\Admin\Report;

use App\Controllers\BaseController;


class Simper extends BaseController
{

    protected $data;

    function __construct()
    {
    }

    public function index()
    {
        return view('admin/report/simper/v_report_simper');
    }
}
