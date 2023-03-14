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
        'note',
        'status_simper',
        'status_test', //Status 1 lulus, status 2 tidak lulus
        'status_violation', //- Training - Full - Instruktur - Probation - Restricted - Moving

    ];

    // Dates
    protected $useTimestamps = false;

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
        // $search1 = $this->db->escape($idSimper);
        // $search2 = $this->db->escape($idDetail);

        $sql = "SELECT * FROM simper_detail WHERE vehicle_id='$idDetail' AND id_simper='$idSimper'";
        return $this->db->query($sql)->getRowObject();
    }

    function getSimperDetailById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT a.*, c.status_name, d.violation_name, d.id as id_violation, e.test_name, f.unit_name FROM simper_detail a 
                    JOIN simper b on a.id_simper = b.id_simper
                    JOIN ref_status_request c on a.status_simper = c.id
                    JOIN ref_status_violation d on a.status_violation = d.id
                    JOIN ref_status_test e on a.status_test = e.id
                    JOIN vehicle f on a.vehicle_id = f.id WHERE b.id_simper = $search";
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
