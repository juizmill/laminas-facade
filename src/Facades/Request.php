<?php

declare(strict_types=1);

namespace LaminasFacade\Facades;

use ArrayIterator;
use Laminas\Uri\Http;
use Laminas\Http\Cookies;
use Laminas\Stdlib\ParametersInterface;
use Laminas\Http\Header\HeaderInterface;
use Laminas\Http\Request as LaminasRequest;

/**
 * @method static LaminasRequest fromString($string, $allowCustomMethods = true)
 * @method static LaminasRequest setMethod($method)
 * @method static string getMethod()
 * @method static LaminasRequest setUri($uri)
 * @method static Http getUri()
 * @method static string getUriString()
 * @method static LaminasRequest setQuery(ParametersInterface $query)
 * @method static ParametersInterface|mixed getQuery()
 * @method static LaminasRequest setPost(ParametersInterface $post)
 * @method static ParametersInterface|mixed getPost()
 * @method static bool|Cookies getCookies()
 * @method static LaminasRequest setFiles(ParametersInterface $files)
 * @method static ParametersInterface|mixed getFiles()
 * @method static ArrayIterator|bool|HeaderInterface getHeaders()
 * @method static ArrayIterator|bool|HeaderInterface getHeader($header)
 * @method static bool isOptions()
 * @method static bool isPropFind()
 * @method static bool isGet()
 * @method static bool isHead()
 * @method static bool isPost()
 * @method static bool isPut()
 * @method static bool isDelete()
 * @method static bool isTrace()
 * @method static bool isConnect()
 * @method static bool isPatch()
 * @method static bool isXmlHttpRequest()
 * @method static bool isFlashRequest()
 * @method static string renderRequestLine()
 * @method static string toString()
 * @method static bool getAllowCustomMethods()
 * @method static void setAllowCustomMethods($strictMethods)
 */
abstract class Request extends AbstractFacade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Request';
    }
}