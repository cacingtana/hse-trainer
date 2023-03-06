<?php

namespace App\Controllers\Admin\Report;

use App\Controllers\BaseController;

class Commisioning extends BaseController
{

    protected $data;

    public function __construct()
    {
    }

    public function index()
    {
        return view('admin/report/commisioning/v_report_commisioning');
    }
}
