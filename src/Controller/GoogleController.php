<?php

namespace App\Controller;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends Controller
{
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google", name="connect_google")
     */
    public function connectAction()
    {
        return $this->get('oauth2.registry')->getClient('google')->redirect();
    }

    /**
     * After going to Google, you're redirected back here
     * because this is the "redirect_route" you configured
     * in knpu_oauth2_client.yaml
     *
     * @Route("/connect/google/check", name="connect_google_check")
     */
    public function connectCheckAction(Request $request, LoggerInterface $logger)
    {
        return $this->redirectToRoute('app_home');
    }
}
