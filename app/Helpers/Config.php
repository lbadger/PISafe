<?php

namespace Badger\Helpers;

class Config extends \Config
{
    public static function Req($key) {
        $value = self::get($key);
        if ($value == null) {
            throw new \Exception("$key not found in the config");
        }
        return $value;
    }
}