<?php

namespace OLOG;

class REQUEST
{
    static public function required($key)
    {
        \OLOG\Assert::assert(array_key_exists($key, $_REQUEST), 'Missing required REQUEST field ' . $key);

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