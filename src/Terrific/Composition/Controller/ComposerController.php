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
        return array();
    }

    /**
     * @Composer("Composer Download")
     * @Route("/composer/download", name="composer_download")
     * @Template()
     */
    public function downloadAction()
    {
        return array();
    }
}
