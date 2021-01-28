<?php

namespace App\Repository;

use App\Repository\HomeChecker;
use App\Repository\HomeStatus;

class Locks extends HomeChecker{

    public function check(HomeStatus $home)
    {
        if( ! $home->locked)
        {
            throw new Exception('The doors are not locked!! Abotrt abort.');
        }

        $this->next($home);
    }

}

?>