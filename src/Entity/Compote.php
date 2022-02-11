<?php

namespace App\Entity;

use App\Repository\CompoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompoteRepository::class)]
class Compote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;

    #[ORM\Column(type: 'string', length: 255)]
    public $Typz;

    #[ORM\Column(type: 'float')]
    public $Price;

    #[ORM\Column(type: 'boolean')]
    public $Bio;

    #[ORM\Column(type: 'boolean')]
    public $Vegan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypz(): ?string
    {
        return $this->Typz;
    }

    public function setTypz(string $Typz): self
    {
        $this->Typz = $Typz;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getBio(): ?bool
    {
        return $this->Bio;
    }

    public function setBio(bool $Bio): self
    {
        $this->Bio = $Bio;

        return $this;
    }

    public function getVegan(): ?bool
    {
        return $this->Vegan;
    }

    public function setVegan(bool $Vegan): self
    {
        $this->Vegan = $Vegan;

        return $this;
    }
}
