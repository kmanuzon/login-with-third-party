<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 *
 * @package App\Controller
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="app_index")
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('index.html.twig', []);
    }
}
