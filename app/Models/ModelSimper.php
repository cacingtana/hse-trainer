<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSimper extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'simper';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_simper',
        'employee_id',
        'vehicle_id',
        'issue_date',
        'note',
        'status',
    ];

    // Dates
    protected $useTimestamps = false;

    function simperNumber()
    {
        date_default_timezone_set('Asia/Jakarta');
        $kode = "";
        $tgl = date("ymd");
        $sql = $this->db->query("SELECT MAX(RIGHT(id_simper,5)) AS kd_max FROM simper");

        if ($sql->getResultObject() > 0) {
            foreach ($sql->getResultObject() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kode = sprintf("%05s", $tmp);
            }
        } else {
            $kode = $tgl . "00001";
        }
        return  "ID" . $tgl . $kode;
    }

    function getSimper()
    {
        $query = "SELECT a.*, b.name_emp, c.dept_name, d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id";
        return  $this->db->query($query)->getResultObject();
    }

    function getSimperById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, b.id_emp, b.name_emp, b.nik, b.nip, c.dept_name, d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id WHERE a.id_simper = $search";
        return  $this->db->query($query)->getRowObject();
    }


    //Kebutuhan report simper
    function getReportSimper($id)
    {
    }

    function getReportSimperById($id)
    {
    }
}
