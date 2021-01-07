<?php

if (!function_exists('dd')) {
    /**
     * 调试打印函数. dump for debug
     * 
     * @param bool is_die  is need exit when function over
     * @param mixed data  variables you want dump
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
