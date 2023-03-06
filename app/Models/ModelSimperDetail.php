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
        'status',
    ];

    // Dates
    protected $useTimestamps = false;

    function deleteById($id)
    {
        $search = $this->db->escape($id);
        $sql = "DELETE FROM simper_detail WHERE id=$search";
        $this->db->query($sql)->getResultObject();
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
        $query = "SELECT a.*, c.status_name, d.unit_name FROM simper_detail a 
                    JOIN simper b on a.id_simper = b.id_simper
                    JOIN ref_status_request c on a.status = c.id
                    JOIN vehicle d on a.vehicle_id = d.id WHERE b.id_simper = $search";
        return  $this->db->query($query)->getResultObject();
    }
}
