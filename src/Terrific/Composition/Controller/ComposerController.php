<?php

namespace Terrific\Composition\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Terrific\ComposerBundle\Annotation\Composer;

class ComposerController extends Controller
{
    /**
     * @Composer("Composer Overview")
     * @Route("/composer", name="composer")
     * @Template()
     */
    public function indexAction()
    {
        // activate the toolbar
        // echo 'test'.$this->container->set('mode', 'terrific_composer.toolbar', 'Terrific\ComposerBundle');
        // echo $this->container->set('mode', 'terrific_composer.toolbar', true);

        return array();
    }
}
