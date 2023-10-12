<?php

declare(strict_types=1);

namespace LaminasFacade;

use Laminas\ServiceManager\ServiceManager as LaminasServiceManager;

/**
 * @method static object get(string $name)
 * @method static mixed|object build($name, ?array $options = null)
 * @method static bool has(string $name)
 * @method static void setAllowOverride($flag)
 * @method static bool getAllowOverride()
 * @method static LaminasServiceManager configure(array $config)
 * @method static void setAlias($alias, $target)
 * @method static void setInvokableClass($name, $class = null)
 * @method static void setFactory($name, $factory = null)
 * @method static void mapLazyService($name, $class = null)
 * @method static void addAbstractFactory($factory)
 * @method static void addDelegator($name, $delegator)
 * @method static void addInitializer($initializer)
 * @method static void setService($name, $service)
 * @method static void setShared($name, $flag)
 */
abstract class ServiceManager extends AbstractFacade
{
    protected static function getFacadeAccessor(): string
    {
        return LaminasServiceManager::class;
    }
}