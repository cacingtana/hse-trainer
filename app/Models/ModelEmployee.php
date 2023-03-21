<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEmployee extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'employee';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_emp',
        'type_emp',
        'nik',
        'nip',
        'name_emp',
        'sex',
        'ref_department_id',
        'ref_position_id',
        'sim_sio',
        'license_number',
        'date_expired_request',
        'date_expired_sim_sio',
        'status_emp',
        'ref_coorporate_id',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id_emp' => $id]);
    }

    function findById($nik)
    {
        $sql = "SELECT * FROM employee WHERE nik='$nik'";
        return $this->db->query($sql)->getRowObject();
    }

    public function getAllEmployee()
    {
        $query = "SELECT a.*, b.dept_name, c.type_employee, d.coorporate_name, e.position_name FROM employee a 
                    JOIN departments b on a.ref_department_id = b.id
                    JOIN ref_type_employee c on a.type_emp = b.id
                    JOIN ref_coorporate d on a.ref_coorporate_id = d.id
                    JOIN position e on a.ref_position_id = e.id";
        return  $this->db->query($query)->getResultObject();
    }

    function getEmployeeById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, b.dept_name, d.coorporate_name, e.position_name FROM employee a 
                    JOIN departments b on a.ref_department_id = b.id
                    JOIN ref_coorporate d on a.ref_coorporate_id = d.id
                    JOIN position e on a.ref_position_id = e.id WHERE a.id_emp = $search";
        return  $this->db->query($query)->getRowObject();
    }

    function employeeNumber()
    {
        date_default_timezone_set('Asia/Jakarta');
        $kode = "";
        $tgl = date("ymd");
        $sql = $this->db->query("SELECT MAX(RIGHT(id_emp,5)) AS kd_max FROM employee");

        if ($sql->getResultObject() > 0) {
            foreach ($sql->getResultObject() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kode = sprintf("%05s", $tmp);
            }
        } else {
            $kode = $tgl . "00001";
        }
        return  "EMP" . $tgl . $kode;
    }
}
