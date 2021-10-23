<?php


namespace App\Login;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LoginService
 * @package App\Login
 */
class LoginService extends AbstractController
{
    /**
     * @Route("/auth/login", name="login")
     */
    public function index(): JsonResponse
    {
        return new JsonResponse('you called me !');
    }
}
