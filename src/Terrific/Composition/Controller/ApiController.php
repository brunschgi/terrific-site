<?php

namespace Terrific\Composition\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Terrific\ComposerBundle\Annotation\Composer;

class ApiController extends Controller
{
    /**
     * @Composer("API Overview")
     * @Route("/api", name="api")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Composer("Api Basics")
     * @Route("/api/basics", name="api_basics")
     * @Template()
     */
    public function basicsAction()
    {
        return array();
    }

    /**
     * @Composer("Api Application")
     * @Route("/api/application", name="api_application")
     * @Template()
     */
    public function applicationAction()
    {
        return array();
    }

    /**
     * @Composer("Api Module")
     * @Route("/api/module", name="api_module")
     * @Template()
     */
    public function moduleAction()
    {
        return array();
    }

    /**
     * @Composer("Api Skin")
     * @Route("/api/skin", name="api_skin")
     * @Template()
     */
    public function skinAction()
    {
        return array();
    }

    /**
     * @Composer("Api Sandbox")
     * @Route("/api/sandbox", name="api_sandbox")
     * @Template()
     */
    public function sandboxAction()
    {
        return array();
    }

    /**
     * @Composer("Api Connector")
     * @Route("/api/connector", name="api_connector")
     * @Template()
     */
    public function connectorAction()
    {
        return array();
    }
}
