<?php

namespace App\Controller;

use Symfony\Bridge\Twig\TokenParser\DumpTokenParser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/auth/login", name="login")
     */
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse("nom :" . $name . " and your password : " . $password);
    }
}
