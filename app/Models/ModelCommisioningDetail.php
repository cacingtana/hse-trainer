<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCommisioningDetail extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'commisioning_detail';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        "commisioning_id",
        "type_commisioning",
        "start_date",
        "expire_date",
        "hm_km",
        "employee_id",
        "plant",
        "safety",
        "trainer",
        "information",
        "note",
    ];

    // Dates
    protected $useTimestamps = false;

    public function getCommisioningDetailById()
    {
        $query = "SELECT a.*, b.*, c.unit_name FROM commisioning_detail a 
                    JOIN commisioning b on a.id_commisioning = b.commisioning_id
                    JOIN vehicle c on a.type_unit = b.id";
        return  $this->db->query($query)->getRowObject();
    }
}
