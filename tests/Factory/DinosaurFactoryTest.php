<?php

namespace Factory;

use PHPUnit\Framework\TestCase;
use App\Factory\DinosaurFactory;
use App\Entity\Dinosaur;

class DinosaurFactoryTest extends TestCase
{
    /**
     * @var DinosaurFactory
     */
    private $factory; 

    public function setUp(): void
    {
        $this->factory = new DinosaurFactory();
    }

    public function testItGrowsAVelociraptor()
    { 
        $dinosaur = $this->factory->growVelociraptor(5);

        $this->assertInstanceOf(Dinosaur::class, $dinosaur);
        // $this->assertInternalType('string', $dinosaur->getGenus()); Deprecated assertion
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertSame(5, $dinosaur->getLength());
    }

    // incomplete test
    public function testItGrowsATriceraptops()
    { 
        $this->markTestIncomplete('Waiting for confirmation from GenLab hahahaha...');
    }

    //Skipping a test
    public function testItGrowsABabyVelociraptor()
    { 
        if (!class_exists('Nanny')) { 
            $this->markTestSkipped('There is nobody to watch the baby');
        }

        $dinosaur = $this->factory->growVelociraptor(1);
        $this->assertSame(1, $dinosaur->getLength());
    }
}
