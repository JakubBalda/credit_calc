<?php

namespace app\transfer;

class Users{
    public $login;
    public $role;

    function __construct($role, $login){
        $this->role = $role;
        $this->login = $login;
    }
}