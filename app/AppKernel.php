<?php
/**
 * Created by PhpStorm.
 * User: smatejic
 * Date: 4/17/16
 * Time: 10:10 PM
 */

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class AppKernel
 */
class AppKernel extends Kernel
{

    /**
     * @return array
     */
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new AppBundle\AppBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
        ];

        if ($this->getEnvironment() == 'dev') {
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new \Symfony\Bundle\DebugBundle\DebugBundle();
        }

        return $bundles;
    }

    /**
     * @param LoaderInterface $loader
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');

        $this->loadEnvConfiguration($loader);
    }

    /**
     *
     * Load Any Configuration Based on your enviroment
     *
     * @param LoaderInterface $loader
     */
    public function loadEnvConfiguration(LoaderInterface $loader)
    {
        $loader->load(function (ContainerBuilder $container) {

            $environment = $this->getEnvironment();

            if ($environment == 'dev' || $environment == 'test') {
                $this->loadDevToolBar($container);
                $this->loadRouting($container);
            }
        });
    }

    /**
     * @param ContainerBuilder $container
     */
    private function loadDevToolBar(ContainerBuilder $container)
    {
        $container->loadFromExtension(
            'web_profiler',
            ['toolbar' => true]
        );
    }

    /**
     * @param ContainerBuilder $container
     */
    private function loadRouting(ContainerBuilder $container)
    {
        $container->loadFromExtension(
            'framework',
            [
                'router' => [
                    'resource' => '%kernel.root_dir%/config/routing_dev.yml'
                ]
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return $this->rootDir.'/../var/cache/'.$this->environment;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        return $this->rootDir.'/../var/logs';
    }

}
