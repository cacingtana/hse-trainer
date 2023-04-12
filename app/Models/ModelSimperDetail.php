<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSimperDetail extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'simper_detail';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_simper',
        'vehicle_id',
        'issue_date',
        'expire_date',
        "theory_test_date",
        "theory_test_value",
        "practice_test_date",
        "practice_test_value",
        "eye_test_date",
        "eye_test_value",
        'status_simper',
        'status_test', //Status 1 lulus, status 2 tidak lulus
        'note',
    ];

    // Dates
    protected $useTimestamps = true;

    function deleteById($id)
    {
        $search = $this->db->escape($id);
        $sql = "DELETE FROM simper_detail WHERE id=$search";
        $this->db->query($sql)->getResultObject();
    }

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    function findById($idSimper, $idDetail)
    {
        $sql = "SELECT * FROM simper_detail WHERE vehicle_id='$idDetail' AND id_simper='$idSimper'";
        return $this->db->query($sql)->getRowObject();
    }

    function findByNic($nik)
    {
        $sql = "SELECT * FROM simper WHERE vehicle_id='$nik'";
        return $this->db->query($sql)->getRowObject();
    }

    function getSimperDetailById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, c.status_name, d.eye_name, e.test_name, f.unit_name FROM simper_detail a 
                    JOIN simper b on a.id_simper = b.id_simper
                    JOIN ref_status_request c on a.status_simper = c.id
                    JOIN ref_status_eye d on a.eye_test_value = d.id
                    JOIN ref_status_test e on a.status_test = e.id
                    JOIN vehicle f on a.vehicle_id = f.id WHERE b.id_simper = $search ORDER BY a.id";
        return  $this->db->query($query)->getResultObject();
    }

    function getSimperDetailDetailById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, c.status_name, d.unit_name FROM simper_detail a 
                    JOIN ref_status_request c on a.status_simper = c.id
                    JOIN vehicle d on a.vehicle_id = d.id WHERE a.id = $search";
        return  $this->db->query($query)->getRowObject();
    }
}
