<?php

namespace App\Controllers\Admin\Report;

use App\Controllers\BaseController;
use App\Core\Services\ServiceSimper;

class Simper extends BaseController
{
    protected $data = [];
    protected $simper;

    public function __construct()
    {
        $this->simper = new ServiceSimper();
    }

    public function index()
    {
        $this->data = [
            'simper' => $this->simper->getReportSimperHeaderDetail(),
        ];
        return view('admin/report/simper/v_report_simper', $this->data);
    }

    public function detail_report_simper()
    {
        $this->data = [
            'simper' => $this->simper->getReportSimperHeaderDetail(),
        ];

        return view('admin/report/simper/v_report_detail_simper', $this->data);
    }
}
