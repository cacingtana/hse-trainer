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
        "no_unit",
        "no_mesin",
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
        $query = "SELECT a.*, b.*, e.unit_name, d.coorporate_name, c.dept_name FROM commisioning_detail a 
                    JOIN commisioning b on a.commisioning_id = b.id_commisioning
                    JOIN departments c on b.ref_department_id = c.id
                    JOIN ref_coorporate d on b.ref_coorporate_id = d.id
                    JOIN vehicle e on a.type_unit = e.id";
        return  $this->db->query($query)->getRowObject();
    }
}
