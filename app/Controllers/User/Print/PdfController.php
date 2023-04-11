<?php

namespace App\Controllers\User\Print;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class PdfController extends BaseController
{
    protected $data = [];

    public function __construct()
    {
    }

    public function index()
    {
        return view('user/simper/v_print_simper');
    }

    public function htmlToPDF()
    {
        $dompdf = new \Dompdf\Dompdf();

        //dd($dompdf);
        $dompdf->loadHtml(view('user/simper/v_print_simper'));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream();
    }
}
