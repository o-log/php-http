<?php

namespace OLOG;

class REQUEST
{
    static public function required($key)
    {
        if (!array_key_exists($key, $_REQUEST)) {
            throw new \Exception('Missing required REQUEST field ' . $key);
        }

        return $_REQUEST[$key];
    }

    static public function optional($key, $default = '')
    {
        $value = $default;

        if (array_key_exists($key, $_REQUEST)) {
            $value = $_REQUEST[$key];
        }

        return $value;
    }
}