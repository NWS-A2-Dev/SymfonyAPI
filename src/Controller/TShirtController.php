<?php

namespace App\Controller;

use App\Services\RequestGetter;
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

        return new Response($data, 200);
    }

    #[Route('/TShirt', methods: "POST")]
    public function post(Request $r, RequestGetter $g): Response
    {
        $name = $g->get("name");
        $price = $g->get("price");

        // Traitement

        return $this->json([
            'name' => $name,
            "price" => $price
        ]);
    }
}
