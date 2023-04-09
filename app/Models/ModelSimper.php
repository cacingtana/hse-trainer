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
        'status_violation',
        'note',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id_simper' => $id]);
    }

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
        return  "A-" . $tgl . $kode;
    }

    ////////////////////////////////

    function getSimperHeaderAndDetail()
    {
        $data = [];
        $query = "SELECT a.*, b.name_emp, b.date_expired_sim_sio, b.license_number, b.sim_sio, date_expired_request, date_expired_sim_sio, c.dept_name, b.nik, b.nip , d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id";

        $result = $this->db->query($query)->getResultObject();

        for ($i = 0; $i < count($result); $i++) {
            $temp = $result[$i]->id_simper;

            $sql = "SELECT * FROM simper_detail WHERE id_simper = '$temp'";
            array_push($data, [
                'header' => $result[$i],
                'detail' =>  $this->db->query($sql)->getResultObject(),
            ]);
        }
        return $data;
    }

    ////////////////////////////////

    function getSimper()
    {
        $query = "SELECT a.*, b.name_emp, b.date_expired_sim_sio, c.dept_name, b.nik, b.nip , d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id";
        return  $this->db->query($query)->getResultObject();
    }

    function getSimperByPostDate($start, $end)
    {
        $query = "SELECT a.*, b.name_emp, b.date_expired_sim_sio, c.dept_name, b.nik, b.nip , d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id WHERE b.date_expired_sim_sio BETWEEN '$start' AND '$end' ORDER BY b.date_expired_sim_sio";
        return  $this->db->query($query)->getResultObject();
    }

    function getSimperById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, b.id_emp, b.name_emp, b.nik, b.nip, b.date_expired_sim_sio, c.dept_name, d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id WHERE a.id_simper = $search";
        return  $this->db->query($query)->getRowObject();
    }


    //Kebutuhan report simper
    function getReportSimper()
    {
        $query = "SELECT a.*, b.*, c.dept_name, b.nik, b.nip , d.coorporate_name, e.position_name FROM simper a 
                    JOIN employee b on a.employee_id = b.id_emp
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN position e on b.ref_position_id = e.id";
        return  $this->db->query($query)->getResultObject();
    }


    //Dashboad
    function totalSimper($type)
    {
        $query = "SELECT COUNT(id_simper) as total FROM simper a 
        JOIN employee b ON b.id_emp = a.employee_id WHERE b.type_emp='$type'";
        return  $this->db->query($query)->getRowObject();
    }
}
