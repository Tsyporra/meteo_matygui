<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MountainController extends AbstractController
{
    /**
     * @Route("/mountain", name="app_mountain")
     */
    public function index(): Response
    {
        return $this->render('mountain/mountain.html.twig');
    }
}
