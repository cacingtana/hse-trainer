<?php

namespace App\Core\Services;

use App\Models\ModelNotification;

class ServiceNotification
{
    protected $data = [];
    protected $notif;
    protected $userActive;

    function __construct()
    {
        $this->notif = new ModelNotification();
    }

    function storeCommisioningNotification($data)
    {
    }

    function cekExpireNotification()
    {
    }
}
