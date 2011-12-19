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
     * Gets back the concept content
     *
     * @Template()
     */
    public function conceptAction()
    {
        $js = file_get_contents(__DIR__ . '/../Resources/snippets/concept.js');
        $html = file_get_contents(__DIR__ . '/../Resources/snippets/concept.html');
        $css = file_get_contents(__DIR__ . '/../Resources/snippets/concept.css');

        return array('snippets' => array('js' => $js, 'html' => $html, 'css' => $css));
    }

    /**
     * Gets back the composer content
     *
     * @Template()
     */
    public function composerAction()
    {
        return array();
    }

    /**
     * Gets back the composer content
     *
     * @Template()
     */
    public function integrationsAction()
    {
        return array();
    }
}