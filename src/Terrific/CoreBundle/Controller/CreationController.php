<?php

namespace Terrific\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CreationController extends Controller
{

    public function moduleAction()
    {
        $author = "Remo";
        return $this->render('TerrificCoreBundle:Creation:module.html.twig', array('author' => $author));
    }
}
