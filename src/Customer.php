<?php

namespace ProgrammerNeuron\Belajar;

class Customer {

    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name): string {
        return "Hello Fahmi $name, My Name is $this->name" . PHP_EOL;
    }

}