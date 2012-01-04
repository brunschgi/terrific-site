<?php

namespace Terrific\Module\ContentBundle\Controller;

use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class ContentController extends Controller
{
    /**
     * Gets back the home content
     *
     * @Template()
     */
    public function homeAction()
    {
        return array();
    }

    /**
     * Gets back the core content
     *
     * @Template()
     */
    public function coreAction()
    {
        return array();
    }
}