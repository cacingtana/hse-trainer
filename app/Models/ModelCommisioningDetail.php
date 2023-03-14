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
        "date_commisioning",
        "date_expired_commisioning",
        "hm_km",
        "plant",
        "safety",
        "trainer",
        "informasi",
        "note",
        "status_test",
    ];
    // Dates
    protected $useTimestamps = false;

    // public function getCommisioningDetailById()
    // {
    //     $query = "SELECT a.*, b.*, e.unit_name, d.coorporate_name, c.dept_name FROM commisioning_detail a 
    //                 JOIN commisioning b on a.commisioning_id = b.id_commisioning
    //                 JOIN departments c on b.ref_department_id = c.id
    //                 JOIN ref_coorporate d on b.ref_coorporate_id = d.id
    //                 JOIN vehicle e on a.vehicle_id = e.id";
    //     return  $this->db->query($query)->getResultObject();
    // }

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function getCommisioningDetailById($idCommisioning)
    {
        $search = $this->db->escape($idCommisioning);
        $query = "SELECT a.*, b.*, c.test_name FROM commisioning_detail a 
                    JOIN commisioning b on a.commisioning_id = b.id_commisioning
                    JOIN ref_status_test c on a.status_test = c.id WHERE a.commisioning_id=$search";
        return  $this->db->query($query)->getResultObject();
    }

    public function getCommisioningDetailDetailById($id)
    {
        $search = $this->db->escape($id);
        $query = "SELECT * FROM commisioning_detail WHERE id=$search";
        return  $this->db->query($query)->getRowObject();
    }
}
