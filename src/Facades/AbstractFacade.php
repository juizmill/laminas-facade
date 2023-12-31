<?php

declare(strict_types=1);

namespace LaminasFacade\Facades;

use Laminas\Mvc\Application;
use Laminas\Stdlib\ArrayUtils;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;

abstract class AbstractFacade
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function __callStatic(string $method, ?array $args = null)
    {
        $instance = static::resolveFacadeInstance();

        return $instance->$method(...$args);
    }

    /**
     * @throws \Exception if not implemented
     */
    protected static function getFacadeAccessor(): string
    {
       throw new \Exception('AbstractFacade does not implement getFacadeAccessor method.');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws \Exception
     */
    private static function resolveFacadeInstance(): object
    {
        $appConfigDir = __DIR__ . '/../../../../../config';

        $appConfig = require $appConfigDir . '/application.config.php';
        if (file_exists(__DIR__ . '/development.config.php')) {
            $appConfig = ArrayUtils::merge($appConfig, require $appConfigDir . '/development.config.php');
        }

        return Application::init($appConfig)->getServiceManager()->get(static::getFacadeAccessor());
    }
}