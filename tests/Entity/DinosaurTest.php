<?php 

namespace App\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Dinosaur;

class DinosaurTest extends TestCase 
{
    public function testSettingLength()
    {
        $dinosaur = new Dinosaur();

        $this->assertSame(0, $dinosaur->getLength());

        $dinosaur->setLength(9);

        $this->assertSame(9, $dinosaur->getLength());
    }

    public function testDinosaurHasNotShrunk()
    {
        $dinosaur = new Dinosaur();

        $dinosaur->setLength(1);

        $this->assertGreaterThan(12, $dinosaur->getLength(), 'Yeah some error occured');
    }
}