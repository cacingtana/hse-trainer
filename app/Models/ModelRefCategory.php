<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRefCategory extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ref_category';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'category_name',
        'ref_user_id',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
}
