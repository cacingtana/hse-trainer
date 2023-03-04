<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRefRole extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_role';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'role_name',
        'description',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
