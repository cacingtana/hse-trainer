<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPosition extends Model
{
    protected $db;
    protected $DBGroup          = 'default';
    protected $table            = 'position';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ref_user_id',
        'position_name',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
}
