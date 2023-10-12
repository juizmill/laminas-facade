<?php

declare(strict_types=1);

namespace LaminasFacade\Facades;

use ArrayObject;
use Laminas\EventManager\EventInterface;
use Laminas\EventManager\ResponseCollection;
use Laminas\EventManager\SharedEventManagerInterface;

/**
 * @method static void setEventPrototype(EventInterface $prototype)
 * @method static SharedEventManagerInterface|null getSharedManager()
 * @method static array getIdentifiers()
 * @method static void setIdentifiers(array $identifiers)
 * @method static void addIdentifiers(array $identifiers)
 * @method static ResponseCollection trigger($eventName, $target = null, $argv = [])
 * @method static ResponseCollection triggerUntil($eventName, $target, $argv = [])
 * @method static ResponseCollection triggerListeners($event, $target = null, $argv = [])
 * @method static ResponseCollection triggerEventUntil(callable $callback, EventInterface $event)
 * @method static callable attach($eventName, callable $listener, $priority = 1)
 * @method static void detach(callable $listener, $eventName = null, $force = false)
 * @method static void clearListeners($eventName)
 * @method static ArrayObject prepareArgs(array $args)
 */
abstract class EventManager extends AbstractFacade
{
    protected static function getFacadeAccessor(): string
    {
        return 'EventManager';
    }
}