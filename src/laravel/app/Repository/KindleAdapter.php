<?php

namespace App\Repository;

use App\Interfaces\BookInterface;

class KindleAdapter implements BookInterface {
    

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }


    public function open()
    {
        return $this->kindle->turnOn();

        //return $this->kindle->turnOn();
    }

    public function turnPage()
    {
       // return var_dump("DD");
          return $this->kindle->pressNextButton();
    }
}

?>