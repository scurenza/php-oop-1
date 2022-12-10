<?php

class Cast
{
    public $name;
    public $surname;
    public $age;

    function __construct(string $name, string $surname, string $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function printCastInfo()
    {
        return "Nome: $this->name; Cognome: $this->surname; Età: $this->age;";
    }
}
