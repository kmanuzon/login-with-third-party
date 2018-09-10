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
        return $this->render('index.html.twig', [
            'year' => date('Y'),
            'google_sign_in_url' => $this->generateUrl('connect_google')
        ]);
    }
    /**
     * @Route("/home", name="app_home")
     *
     * @return Response
     */
    public function homeAction()
    {
        return $this->render('home.html.twig', [
            'year' => date('Y'),
            'home_url' => $this->generateUrl('app_home'),
            'logout_url' => $this->generateUrl('app_index'),
            'user' => [
                'emails' => [
                    ['value' => '']
                ],
                'id' => '',
                'displayName' => '',
                'name' => [
                    'familyName' => '',
                    'givenName' => ''
                ],
                'image' => [
                    'url' => ''
                ]
            ]
        ]);
    }
    /**
     * @Route("/admin")
     */
    public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
