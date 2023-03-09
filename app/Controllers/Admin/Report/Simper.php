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
            'simper' => $this->simper->getReportSimper(),
        ];
        return view('admin/report/simper/v_report_simper', $this->data);
    }
}
