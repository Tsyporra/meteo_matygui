<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeachController extends AbstractController
{
    /**
     * @Route("/beach", name="app_beach")
     */
    public function index(): Response
    {
        return $this->render('beach/beach.html.twig');
    }
}
