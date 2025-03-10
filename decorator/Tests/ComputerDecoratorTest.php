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
        // TODO: faire le test
        $this->assertSame(true, 1 === 1);
    }

    public function testLaptopWithOLEDScreen()
    {
        // TODO: faire le test
        $this->assertSame(false, 1 === 2);
    }

    public function testbasicGPU()
    {
        $GPU = new GPU();

        $this->assertSame(200, $GPU->getPrice());
        $this->assertSame("A GPU computer", $GPU->getDescription());
    }

    public function testbasicOledScreen()
    {
        $OledScreen = new OLEDScreen();

        $this->assertSame(100, $OledScreen->getPrice());
        $this->assertSame("A OLED Screen computer", $OledScreen->getDescription());
    }


}