<?php

namespace Container2OXpDo3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__5zsod1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..5zsod1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..5zsod1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeChantier' => ['privates', '.errored..service_locator..5zsod1.App\\Entity\\TypeChantier', NULL, 'Cannot autowire service ".service_locator..5zsod1": it references class "App\\Entity\\TypeChantier" but no such service exists.'],
        ], [
            'typeChantier' => 'App\\Entity\\TypeChantier',
        ]);
    }
}
