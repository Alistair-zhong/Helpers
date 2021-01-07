<?php

if (!function_exists('dd')) {
    /**
     * 调试打印函数. dump for debug
     * 
     * @param bool $is_die  is need exit when function over
     * @param mixed $data  variables you want dump
     */
    function dd($is_die = true, ...$args)
    {
        if (!is_bool($is_die)) {
            $args = [$is_die];
        }

        foreach ($args as $arg) {
            echo "<pre><p style='color:skyblue'>" . print_r($arg, true) . '</p></pre>';
        }
        $is_die && die();
    }
}

if (!function_exists('wrap')) {
    /**
     * 将变量包装成数组，如果已是数组不做处理
     * change no-array variable around in array
     * 
     * @param mixed $var
     */
    function wrap($var)
    {
        if (is_array($var)) {
            return $var;
        }

        return is_null($var) ? [] : [$var];
    }
}

if (!function_exists('is_diff')) {
    /**
     * 判断两个对象的指定字段是否相同 
     * is two objects's specific fields same
     * 
     * @param  object before
     * @param  object after
     * @param array fields
     */
    function is_diff($before, $after, array $fields)
    {
        foreach ($fields as $key => $field) {
            if (($before->{$field} ?? null) === ($after->{$field} ?? null)) {
                unset($fields[$key]);
            }
        }

        return empty($fields) ? false : $fields;
    }
}
