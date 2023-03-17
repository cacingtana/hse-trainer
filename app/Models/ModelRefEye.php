<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRefEye extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_eye';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'eye_name',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
