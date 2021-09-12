<?php

namespace PayU\Sdk;

class Api
{
    const VERSION = '0.0.1';

    protected static $key = null;
    protected static $secret = null;

    protected static $isProdEnv = true;

    protected static $prodUri = "";
    protected static $testUri = "";

    public function __construct(string $key, string  $secret)
    {
        self::$key = $key;
        self::$secret = $secret;
    }

    public static function getKey()
    {
        return self::$key;
    }

    public static function getSecret()
    {
        return self::$secret;
    }

    public static function isProdEnv(bool $bool)
    {
        self::$isProdEnv = $bool;
    }

    /*
     * @bool true == Production  
    */
    public static function setEnv(bool $bool)
    {
        self::$isProdEnv = $bool;
    }

    public static function getFullUrl(string $relativeUrl)
    {
        if (self::$isProdEnv == true) {
            return self::$prodUri . $relativeUrl;
        }
        return self::$testUri . $relativeUrl;
    }
    
}
