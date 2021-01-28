<?php

namespace App\Services;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{

    public function __construct()
    {
    } 

    public function updateHp()
    {

    }

    public function heal()
    {
       

        return $this->user->hp;
    }
}


?>