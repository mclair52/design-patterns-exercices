<?php

namespace App;

class Laptop implements Computer {
    
    public function getPrice(): int 
    {
        return 400;
    }

    public function getDescription(): string 
    {
        return "A laptop computer";
    }
}   

class GPU implements Computer{
    
    public function getPrice(): int 
    {
        return 200;
    }

    public function getDescription(): string 
    {
        return "A GPU computer";
    }
}

class OLEDScreen implements Computer{
    
    public function getPrice(): int 
    {
        return 100;
    }

    public function getDescription(): string 
    {
        return "A OLED Screen computer";
    }
}
