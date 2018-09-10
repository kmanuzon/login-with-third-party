<?php

namespace App\Controller;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
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
        // will redirect to Google!
        return $this->get('oauth2.registry')
            ->getClient('google') // key used in knpu_oauth2_client.yaml
            ->redirect();
    }

    /**
     * After going to Google, you're redirected back here
     * because this is the "redirect_route" you configured
     * in knpu_oauth2_client.yaml
     *
     * @Route("/connect/google/check", name="connect_google_check")
     */
    public function connectCheckAction(Request $request)
    {
        // ** if you want to *authenticate* the user, then
        // leave this method blank and create a Guard authenticator
        // (read below)

        /** @var \KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient $client */
        $client = $this->get('oauth2.registry')
            ->getClient('google');

        try {
            // the exact class depends on which provider you're using
            /** @var \League\OAuth2\Client\Provider\GoogleUser $user */
            $user = $client->fetchUser();

            // do something with all this new power!
            $user->getFirstName();
            // ...
        } catch (IdentityProviderException $e) {
            // something went wrong!
            // probably you should return the reason to the user
            var_dump($e->getMessage());die;
        }

        return $this->render('index.html.twig', [
            'user' => $user->toArray(),
            'year' => date('Y'),
            'home_url' => $this->generateUrl('foobar'),
            'logout_url' => $this->generateUrl('app_index')
        ]);
    }
}
