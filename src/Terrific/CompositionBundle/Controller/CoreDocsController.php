<?php

namespace Terrific\CompositionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Terrific\ComposerBundle\Annotation\Composer;

class CoreDocsController extends Controller
{
    /**
     * @Composer("Core Documentation Overview")
     * @Route("/core/docs", name="core_docs")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Composer("Core Basics Documentation")
     * @Route("/core/docs/basics", name="core_docs_basics")
     * @Template()
     */
    public function basicsAction()
    {
        return array();
    }

    /**
     * @Composer("Core Application Documentation")
     * @Route("/core/docs/application", name="core_docs_application")
     * @Template()
     */
    public function applicationAction()
    {
        return array();
    }

    /**
     * @Composer("Core Module Documentation")
     * @Route("/core/docs/module", name="core_docs_module")
     * @Template()
     */
    public function moduleAction()
    {
        return array();
    }

    /**
     * @Composer("Core Skin Documentation")
     * @Route("/core/docs/skin", name="core_docs_skin")
     * @Template()
     */
    public function skinAction()
    {
        return array();
    }

    /**
     * @Composer("Core Sandbox Documentation")
     * @Route("/core/docs/sandbox", name="core_docs_sandbox")
     * @Template()
     */
    public function sandboxAction()
    {
        return array();
    }

    /**
     * @Composer("Core Connector Documentation")
     * @Route("/core/docs/connector", name="core_docs_connector")
     * @Template()
     */
    public function connectorAction()
    {
        return array();
    }
}
