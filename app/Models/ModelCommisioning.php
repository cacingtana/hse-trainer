<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCommisioning extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'commisioning';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_commisioning",
        "no_unit",
        "no_mesin",
        "type_unit",
        "ref_coorporate_id",
        "ref_department_id",
        "note",
    ];

    // Dates
    protected $useTimestamps = false;

    function commisioningNumber()
    {
        date_default_timezone_set('Asia/Jakarta');
        $kode = "";
        $tgl = date("ymd");
        $sql = $this->db->query("SELECT MAX(RIGHT(id_commisioning,5)) AS kd_max FROM commisioning");

        if ($sql->getResultObject() > 0) {
            foreach ($sql->getResultObject() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kode = sprintf("%05s", $tmp);
            }
        } else {
            $kode = $tgl . "00001";
        }
        return  "CM" . $tgl . $kode;
    }

    function getAllCommisioning()
    {
        $query = "SELECT a.*, b.unit_name, c.dept_name, d.coorporate_name FROM commisioning a 
                    JOIN vehicle b on a.type_unit = b.id
                    JOIN departments c on a.ref_department_id = c.id
                    JOIN ref_coorporate d on a.ref_coorporate_id = d.id";
        return  $this->db->query($query)->getResultObject();
    }

    function getCommisioningById($id)
    {
        $query = "SELECT a.*, b.unit_name, c.dept_name, d.coorporate_name FROM commisioning a 
                    JOIN vehicle b on a.type_unit = b.id
                    JOIN departments c on a.ref_department_id = c.id
                    JOIN ref_coorporate d on a.ref_coorporate_id = d.id";
        return  $this->db->query($query)->getResultObject();
    }
}
