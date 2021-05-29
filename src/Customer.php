<?php

namespace ProgrammerZamanNow\Belajar;

class customer
{

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello($name): string
    {
        return "Hello $name, my name is $this->name;";
    }

}
