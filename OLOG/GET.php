<?php

namespace OLOG;

class GET {

    static public function required($key) {
        $value = '';

        if (array_key_exists($key, $_GET)) {
            $value = $_GET[$key];
        }

        if ($value == ''){
            throw new \Exception('Missing required GET field ' . $key);
        }

        return $value;
    }

    static public function optional($key, $default = '') {
        $value = '';

        if (array_key_exists($key, $_GET)) {
            $value = $_GET[$key];
        }

        if ($value == '') {
            $value = $default;
        }

        return $value;
    }

}
