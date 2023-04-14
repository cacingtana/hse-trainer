<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStatusRequest extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_status_request';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'status_name',
        'code_name',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
