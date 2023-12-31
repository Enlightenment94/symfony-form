<?php

namespace ContainerDWJSUTd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ONldM1tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oNldM1t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oNldM1t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'confirmRepository' => ['privates', 'App\\Repository\\ConfirmRepository', 'getConfirmRepositoryService', true],
        ], [
            'confirmRepository' => 'App\\Repository\\ConfirmRepository',
        ]);
    }
}
