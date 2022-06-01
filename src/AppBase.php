<?php
namespace Sobyte\AppAuth;

use think\App;

/**
 * Class AppBase
 * @package Sobyte\AppAuth
 */
class AppBase
{

    protected static function _checkWhat($ip, $value)
    {
        if (strpos($value, '/') > 0) {
            $value = explode('/', $value);
            $num   = 32 - $value[1];
            return ((ip2long($ip) >> $num) == (ip2long($value[0]) >> $num));
        } elseif ($value == $ip) {
            return true;
        } else {
            return false;
        }
    }

}
