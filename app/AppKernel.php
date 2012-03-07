<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Finder\Finder;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Highlight\Bundle\HighlightBundle(),
            new Terrific\CoreBundle\TerrificCoreBundle(),
            new Terrific\ComposerBundle\TerrificComposerBundle(),

            // project
            new Terrific\Composition\TerrificComposition()
        );

        // register all terrific modules
        $dir = __DIR__.'/../src/Terrific/Module/';

        $finder = new Finder();
        $finder->directories()->in($dir)->depth('== 0');

        foreach ($finder as $file) {
            $filename = $file->getFilename();
            $module = 'Terrific\Module\\'.$filename.'\TerrificModule'.$filename;
            $bundles[] = new $module();
        }

        if (in_array($this->getEnvironment(), array('dev'))) {
            // here comes your dev only dependencies

            // update terrific resources
            $dir = __DIR__.'/../src/Terrific/Module/';

            $finder = new Finder();
            $finder->directories()->in($dir)->depth('== 0');

            // deploy composition resources
            @mkdir(__DIR__ .'/../web/bundles');
            // $this->recursiveDelete(__DIR__ .'/../web/bundles/terrificcomposition');
            $this->recursiveCopy(__DIR__.'/../src/Terrific/Composition/Resources/public', __DIR__ .'/../web/bundles/terrificcomposition');

            foreach ($finder as $file) {
                // deploy module resources
                // $this->recursiveDelete(__DIR__ .'/../web/bundles/terrificmodule'.strtolower($file->getFilename()));
                $this->recursiveCopy($file->getRealpath().'/Resources/public', __DIR__ .'/../web/bundles/terrificmodule'.strtolower($file->getFilename()));
            }
        }

        return $bundles;
    }

    private function recursiveCopy($src,$dst) {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' ) && ( strpos($file, '.') !== 0)) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recursiveCopy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    private function recursiveDelete($target) {
        $dir = opendir($target);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($target . '/' . $file) ) {
                    $this->recursiveDelete($target . '/' . $file);
                }
                else {
                    unlink($target . '/' . $file);
                }
            }
        }
        rmdir($target);
    }


    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
