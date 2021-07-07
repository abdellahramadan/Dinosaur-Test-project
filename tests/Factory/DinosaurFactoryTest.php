<?php

namespace Factory;

use PHPUnit\Framework\TestCase;
use App\Factory\DinosaurFactory;
use App\Entity\Dinosaur;

class DinosaurFactoryTest extends TestCase
{
    public function testItGrowsAVelociraptor()
    { 
        $factory = new DinosaurFactory();
        $dinosaur = $factory->growVelociraptor(5);

        $this->assertInstanceOf(Dinosaur::class, $dinosaur);
        // $this->assertInternalType('string', $dinosaur->getGenus()); Deprecated assertion
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertSame(5, $dinosaur->getLength());
    }
}
