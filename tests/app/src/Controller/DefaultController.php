<?php

namespace sonrac\Auth\Tests\App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController.
 */
class DefaultController extends AbstractController
{
    public function index(Request $request)
    {
        \var_dump($this->get('service_container')->get('sonrac_auth.authorization_server'));

        return $this->json([]);
    }
}
