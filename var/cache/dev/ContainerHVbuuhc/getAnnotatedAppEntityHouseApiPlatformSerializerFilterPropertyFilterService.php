<?php

namespace ContainerHVbuuhc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityHouseApiPlatformSerializerFilterPropertyFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_house_api_platform_serializer_filter_property_filter' shared autowired service.
     *
     * @return \ApiPlatform\Serializer\Filter\PropertyFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/Filter/PropertyFilter.php';

        return $container->privates['annotated_app_entity_house_api_platform_serializer_filter_property_filter'] = new \ApiPlatform\Serializer\Filter\PropertyFilter('properties', false, NULL, ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}