<?php

namespace App\Controller;

use App\Entity\Compote;
use App\Repository\CompoteRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FruitController extends AbstractController
{
    #[Route('/fruit', name: 'fruit', methods: "GET")]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FruitController.php',
        ]);
    }

    #[Route('/fruit', methods: "POST")]
    public function ajouter(EntityManagerInterface $manager): Response
    {
        $compote = new Compote();
        $compote
            ->setBio(true)
            ->setVegan(true)
            ->setTypz("type")
            ->setPrice(1.50);

        $manager->persist($compote);
        $manager->flush();

        //$repo = $manager->getRepository(Compote::class);


        return $this->json($compote);
    }

    #[Route('/fruit/{id}', methods: "POST")]
    public function modif(EntityManagerInterface $manager, $id): Response
    {
        $repo = $manager->getRepository(Compote::class);

        $compote = $repo->find($id);
        $compote->setPrice($compote->getPrice() * 2);


        var_dump($compote);

        $manager->persist($compote);
        $manager->flush();

        //


        return $this->json($compote);
    }
}
