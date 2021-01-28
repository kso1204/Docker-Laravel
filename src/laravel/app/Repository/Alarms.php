<?php

namespace App\Repository;

use App\Repository\HomeChecker;
use App\Repository\HomeStatus; 

class Alarms extends HomeChecker{

    public function check(HomeStatus $home)
    {
        if( ! $home->alarmOn)
        {
            throw new Exception('The alarm has not been set!! Abotrt abort.');
        }

        $this->next($home);
    }

}

?>