<?php
// src/Controller/LangdingPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{
    #[Route('/landing', name: 'landing_page')]
    public function index(): Response
    {
        return $this->render('pages/landing.html.twig');
    }
}
