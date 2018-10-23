<?php

class User
{
    private $id;
    private $name;
    private $surename;
    private $login;
    private $email;
    private $password;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
?>