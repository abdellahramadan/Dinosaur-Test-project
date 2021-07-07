<?php 

namespace App\Entity;

class Dinosaur 
{
    private $length = 0;
    private $genus = 'Velociraptor';

    public function __construct(private string $dinosaur, private bool $isCarnivorous){}

    public function getLength(): int 
    {
       return $this->length;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    public function getGenus(): string 
    { 
        return $this->genus;
    }
}