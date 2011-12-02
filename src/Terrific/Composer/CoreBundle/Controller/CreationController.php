<?php

namespace Terrific\Composer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Terrific\Composer\CoreBundle\Entity\Module;
use Terrific\Composer\CoreBundle\Form\ModuleType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Creates the terrific components.
 */
class CreationController extends Controller
{

    /**
     * Creates a terrific module with the designated skins.
     *
     * @Route("/create/module", name="composer_create_module")
     * @Template()
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectResponse|\Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function moduleAction(Request $request)
    {
        // setup a fresh module object
        $module = new Module();

        // create form
        $form = $this->createForm(new ModuleType(), $module);

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // create the module in the filesystem

                return $this->redirect($this->generateUrl('composer_create_module_success'));
            }
        }

        return array('form' => $form->createView());
    }
}
