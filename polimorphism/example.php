<?php

abstract class Base {
    protected $name;

    private function getClassName() {
        return get_called_class();
    }

    public function login() {
        return "<p>Mi nombre es $this->name desde la clase {$this->getClassName()} <br><p>";
    }
}

class Admin2 extends Base {
    public function __construct($name) {
        $this->name = $name;
    }
}

class User2 extends Base {
    public function __construct($name) {
        $this->name = $name;
    }
}

class Guest extends Base {
    protected $name = 'invitado';
}

$guest = new Guest();
echo $guest->login();

$admin = new Admin2('Helena');
echo $admin->login();

$user = new User2('John Moore');
echo $user->login();