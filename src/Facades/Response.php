<?php

declare(strict_types=1);

namespace LaminasFacade\Facades;

use Laminas\Http\Header\SetCookie;
use Laminas\Http\Response as LaminasResponse;

/**
 * @method static LaminasResponse fromString($string)
 * @method static void parseStatusLine($line)
 * @method static SetCookie[] getCookie()
 * @method static LaminasResponse setStatusCode($code)
 * @method static int getStatusCode()
 * @method static LaminasResponse setCustomStatusCode($code)
 * @method static LaminasResponse saveStatusCode($code)
 * @method static LaminasResponse setReasonPhrase($reasonPhrase)
 * @method static string getReasonPhrase()
 * @method static string getBody()
 * @method static bool isClientError()
 * @method static bool isForbidden()
 * @method static bool isInformational()
 * @method static bool isNotFound()
 * @method static bool isGone()
 * @method static bool isOk()
 * @method static bool isServerError()
 * @method static bool isRedirect()
 * @method static bool renderStatusLine()
 * @method static string toString()
 *
 */
abstract class Response extends AbstractFacade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Response';
    }
}