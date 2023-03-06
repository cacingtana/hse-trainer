<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelVehicle extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vehicle';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'unit_name',
        'note',
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
