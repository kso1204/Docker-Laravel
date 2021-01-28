<?php

namespace App\Repository;

abstract class Sub {
    
    
    public function make()
    {
        return $this
        ->layBread()
        ->addLettuce()
        ->addPrimaryToppings()
        ->addSauces();
    }

    protected function layBread()
    {
        var_dump('layBread');

        return $this;

        
    }
    protected function addLettuce()
    {
        var_dump('addLettuce');

        return $this;
        
    }
    
    protected function addSauces()
    {
        var_dump('addSauces');

        
    }
    protected abstract function addPrimaryToppings();
}

?>