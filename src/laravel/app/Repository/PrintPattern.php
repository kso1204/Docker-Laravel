<?php

namespace App\Repository;



class PrintPattern {
        
    public function index()
    {
        

        $locks =new Locks;
        $lights = new Lights;
        $alarm = new Alarms;

        $locks->succedWith($lights);
        $lights->succedWith($alarm);

        return $locks->check(new HomeStatus);
    }

}

?>