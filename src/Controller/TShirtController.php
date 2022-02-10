<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TShirtController extends AbstractController
{
    #[Route('/TShirt', methods: "GET")]
    public function index(): Response
    {
        header('Access-Control-Allow-Origin: *');
        $data = file_get_contents(__DIR__ . "/../../api.json");
        $data = json_decode($data);

        return $this->json($data);
    }

    #[Route('/TShirt', methods: "POST")]
    public function post(Request $r): Response
    {
        $name = $r->request->get("name");
        $price = $r->request->get("price");

        // Traitement

        return $this->json([
            'name' => $name,
            "price" => $price
        ]);
    }
}
