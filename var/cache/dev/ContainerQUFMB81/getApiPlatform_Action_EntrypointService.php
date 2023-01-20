<?php

namespace ContainerQUFMB81;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_EntrypointService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\Action\EntrypointAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/EntrypointAction.php';

        return $container->services['api_platform.action.entrypoint'] = new \ApiPlatform\Action\EntrypointAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }
}
