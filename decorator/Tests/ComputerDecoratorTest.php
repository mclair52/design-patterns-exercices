<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OLEDScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop= new Laptop();
        $GPU=new GPU($laptop);

        $this->assertSame(600, $GPU->getPrice());
        $this->assertSame("A laptop computer with a GPU", $GPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop= new Laptop();
        $OLEDScreen=new OLEDScreen($laptop);

        $this->assertSame(500, $OLEDScreen->getPrice());
        $this->assertSame("A laptop computer with an OLED screen", $OLEDScreen->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop= new Laptop();
        $GPU=new GPU($laptop);
        $OLEDScreen=new OLEDScreen($GPU);

        $this->assertSame(700, $OLEDScreen->getPrice());
        $this->assertSame("A laptop computer with a GPU with an OLED screen", $OLEDScreen->getDescription());
    }



}