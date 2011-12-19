<?php

namespace Terrific\Module\NavigationBundle\Controller;

use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class NavigationController extends Controller
{
    /**
     * Gets back the main navigation
     *
     * @Template()
     */
    public function mainAction(Request $request)
    {
        $factory = new MenuFactory();
        $menu = $factory->createItem('Main');
        $menu->setCurrentUri($request->getRequestUri());

        $menu->addChild('Concept', array('uri' => $this->generateUrl('home')));
        $menu->addChild('Core', array('uri' => '/core'));
        $menu->addChild('Composer', array('uri' => '/composer'));
        $menu->addChild('Integrations', array('uri' => '/#integrations'));
        $menu->addChild('Blog', array('uri' => '/blog'));
        $menu->addChild('Showcases', array('uri' => '/showcases'));
        $menu->addChild('About', array('uri' => '/about'));

        $renderer = new ListRenderer();
        return array('menu' => $renderer->render($menu));
    }
}