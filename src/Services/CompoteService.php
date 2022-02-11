<?php


namespace App\Services;


use App\Entity\Compote;
use App\Repository\CompoteRepository;
use Doctrine\ORM\EntityManagerInterface;

class CompoteService
{
    private EntityManagerInterface $Manager;
    private CompoteRepository $Repository;
    private float $Multiplier;

    public function __construct(EntityManagerInterface $m, float $nbr)
    {
        $this->Repository = $m->getRepository(Compote::class);
        $this->Manager = $m;
        $this->Multiplier = $nbr;
    }

    public function MultiplyPrice(int $id) : ?Compote
    {
        $compote = $this->Repository->find($id);
        $compote->setPrice($compote->getPrice() * $this->Multiplier);

        $this->Manager->persist($compote);
        $this->Manager->flush();
        return ($compote);
    }
}