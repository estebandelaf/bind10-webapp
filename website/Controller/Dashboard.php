<?php

namespace website;

class Controller_Dashboard extends \Controller_App
{

    public function index()
    {
        $Zonas = new \website\Bind10\Model_Zonas();
        $this->set([
            'n_zonas' => $Zonas->getCountByUser($this->Auth->User->id),
            'n_registros' => $Zonas->getCountRecordsByUser($this->Auth->User->id),
            'ultimo_serial' => $Zonas->getMaxSerialByUser($this->Auth->User->id),
            'uptime' => $this->uptime(),
            'memory' => $this->memory(),
        ]);
    }

    /**
     * @link http://www.4webhelp.net/scripts/php/uptime.php
     */
    private function uptime()
    {
        $data = shell_exec('uptime');
        $uptime = explode(' up ', $data);
        $uptime = explode(',', $uptime[1]);
        return $uptime[0];
    }

    private function memory()
    {
        return shell_exec('free -m | grep ^Mem | awk \'{print $3"/"$2}\'');
    }

}
