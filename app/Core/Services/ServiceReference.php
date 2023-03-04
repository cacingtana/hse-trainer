<?php

namespace App\Core\Services;

use App\Models\ModelStatus;

class ServiceReference
{
    protected $modelStatus;

    function __construct()
    {
        $this->modelStatus = new ModelStatus();
    }

    //Status
    function getStatus()
    {
        return $this->modelStatus->asObject()->findAll();
    }
}
