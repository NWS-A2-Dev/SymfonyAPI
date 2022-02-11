<?php

namespace App\Controller;

use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'student')]
    public function index(): Response
    {
        $array = [
            new Student("VAREILLE", "Nicolas"),
            new Student("SAUVAT", "Charles"),
            new Student("LIZAMA", "Barbara"),
            new Student("HUGO", "Marc"),
            new Student("BATANTOU", "Delphin"),
        ];

        return $this->json($array);
    }

    #[Route('/student/{nombre}/{truc}')]
    public function get($nombre, $truc): Response
    {
        var_dump($nombre);
        var_dump($truc);

        $array = [
            new Student("VAREILLE", "Nicolas"),
            new Student("SAUVAT", "Charles"),
            new Student("LIZAMA", "Barbara"),
            new Student("HUGO", "Marc"),
            new Student("BATANTOU", "Delphin"),
        ];

        return $this->json($array);
    }
}
