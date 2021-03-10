<?php

class Person{

    public function Hi()
    {
        return "Hi $this->name";
    }
    
}

class User
{

    public $type;

}

class Admin extends Person{

    public $name = "I'm sys admin";

}

$sysUser = new User;
$sysUser->type = new Admin;
echo $sysUser->type->Hi();

