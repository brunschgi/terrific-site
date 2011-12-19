<?php

namespace Terrific\CoreBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Twig_Test_Method;

class TerrificCoreExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    function initRuntime(\Twig_Environment $environment)
    {
        // extend the loader paths
        $currentLoader = $environment->getLoader();
        $currentLoader->setPaths(array_merge($currentLoader->getPaths(), array(__DIR__)));

        // load the appropriate macros
        $environment->addGlobal('tc', $environment->loadTemplate('macros.html.twig'));
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array(
            'containing' => new Twig_Test_Method($this, 'twigTestContaining')
        );
    }

    function twigTestContaining($value, $needle)
    {
        return strpos($value, $needle) !== false;
    }


    /**
     * {@inheritdoc}
     */
    function getName()
    {
        return 'terrific_core';
    }
}



