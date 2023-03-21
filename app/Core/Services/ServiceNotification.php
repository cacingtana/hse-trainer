<?php

namespace App\Core\Services;

use App\Models\ModelNotification;

class ServiceManagementAccess
{
    protected $data = [];
    protected $notif;

    function __construct()
    {
        $this->notif = new ModelNotification();
    }

    function storeNotification()
    {
    }
}
