<?php
// src/Controller/GamingController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamingController extends AbstractController
{
    #[Route('/gaming', name: 'Gaming')]
    public function index(): Response
    {
        return $this->render('pages/gaming.html.twig');
    }
}

