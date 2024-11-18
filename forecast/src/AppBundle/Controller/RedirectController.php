<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends Controller
{
    public function indexAction()
    {
        return new Response('Redirección satisfactoria');
    }

    public function internalRedirectAction()
    {
        // Replace this example code with whatever you need
        return $this->redirectToRoute("redirect_index");
    }

    public function internalRedirectPermanentAction()
    {
        // Replace this example code with whatever you need
        return $this->redirectToRoute("redirect_index", array(), 301);
    }

    public function externalRedirectAction()
    {
        // Replace this example code with whatever you need
        return $this->redirect("http://eugeniaperez.es");
    }
}
?>