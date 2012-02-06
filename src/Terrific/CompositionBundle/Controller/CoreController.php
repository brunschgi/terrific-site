<?php

namespace Terrific\CompositionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Terrific\ComposerBundle\Annotation\Composer;

class CoreController extends Controller
{
    /**
     * @Composer("Core Overview")
     * @Route("/core", name="core")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
