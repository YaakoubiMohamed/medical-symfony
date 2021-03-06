<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Geocoder\Query\GeocodeQuery;
use Geocoder\Query\ReverseQuery;

class FrontController extends AbstractController
{
    /**
     * @Route("/front", name="front")
     */
    public function index(): Response
    {
        
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
