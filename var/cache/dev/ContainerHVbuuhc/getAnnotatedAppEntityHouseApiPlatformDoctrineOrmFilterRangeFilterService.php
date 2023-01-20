<?php

namespace ContainerHVbuuhc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityHouseApiPlatformDoctrineOrmFilterRangeFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_house_api_platform_doctrine_orm_filter_range_filter' shared autowired service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Filter\RangeFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/RangeFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/RangeFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/RangeFilter.php';

        return $container->privates['annotated_app_entity_house_api_platform_doctrine_orm_filter_range_filter'] = new \ApiPlatform\Doctrine\Orm\Filter\RangeFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['logger'] ?? $container->getLoggerService()), ['rent' => NULL], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}