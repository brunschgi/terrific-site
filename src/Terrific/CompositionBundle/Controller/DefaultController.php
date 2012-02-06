<?php

namespace Terrific\CompositionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Terrific\ComposerBundle\Annotation\Composer;

class DefaultController extends Controller
{
    /**
     * @Composer("Home")
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
