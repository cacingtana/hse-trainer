<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRefCoorporate extends Model
{
    protected $db;
    protected $DBGroup          = 'default';
    protected $table            = 'ref_coorporate';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'coorporate_name',
        'abbreviation',
        'coorporate_images',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    function findById($id)
    {
        $sql = "SELECT * FROM ref_coorporate WHERE id='$id'";
        return $this->db->query($sql)->getRowObject();
    }
}
