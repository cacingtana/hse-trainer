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
        "start_date",
        "expire_date",
        "hm_km",
        "employee_id",
        "plant",
        "safety",
        "trainer",
        "information",
        "note",
    ];

    // Dates
    protected $useTimestamps = false;
}
