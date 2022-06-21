<?php

namespace App\Controller;

use App\Security\LinkedinAuthenticator;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LinkedinController extends AbstractController
{
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/linkedin", name="connect_linkedin")
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        //Redirect to google
        return $clientRegistry->getClient('linkedin')->redirect([], []);
    }

    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/linkedin/check", name="connect_linkedin_check")
     */

    public function connectCheckAction(Request $request, LinkedinAuthenticator $linkedinAuthenticator)
    {
        // $googleAuthenticator -> authenticate($request);

        // if (!$this->getUser()) {
        //     return new JsonResponse(array('status' => false, 'message' => "User not found!"));
        // } else {
        //     return $this->redirectToRoute('home');
        // }

        return $this->redirectToRoute('home');

        // ** if you want toauthenticate* the user, then
        // leave this method blank and create a Guard authenticator
    }
}
