<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStatusViolation extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_status_violation';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'violation_name',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
