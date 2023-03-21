<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNotification extends Model
{
    protected $db;
    protected $DBGroup          = 'default';
    protected $table            = 'notification';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'notification_id',
        'employee_id',
        'message',
        'start_at',
        'expire_at',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;

    public function update($id = null, $data = null): bool
    {
        return $this->db->table($this->table)->update($data, ['notification_id' => $id]);
    }
}
