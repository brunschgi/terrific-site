<?php

namespace Terrific\Module\ContentBundle\Controller;

use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class CoreDocsController extends Controller
{
    /**
     * Gets back the basics documentation content
     *
     * @Template()
     */
    public function basicsAction()
    {
        return array();
    }

    /**
     * Gets back the application documentation content
     *
     * @Template()
     */
    public function applicationAction()
    {
        return array();
    }
}