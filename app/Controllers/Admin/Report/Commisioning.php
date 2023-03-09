<?php

namespace App\Controllers\Admin\Report;

use App\Controllers\BaseController;
use App\Core\Services\ServiceCommisioning;

class Commisioning extends BaseController
{
    protected $data = [];
    protected $commisioning;

    public function __construct()
    {
        $this->commisioning = new ServiceCommisioning();
    }

    public function index()
    {
        $this->data = [
            'commisioning' => $this->commisioning->getReportCommisioning(),
        ];
        return view('admin/report/commisioning/v_report_commisioning', $this->data);
    }
}
