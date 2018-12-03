<?php

namespace app\Controllers;

class AlertsController
{
    private $alert;
    private $type;

    public function setAlert($alert, $type)
    {
        $this->alert = $alert;
        $this->type = $type;
    }

    public function getAlert()
    {
        return array('alert' => $this->alert, 'type' => $this->type);
    }
}
