<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting(string $key, $default = null)
    {
        static $cache = [];
        if (!isset($cache[$key])) {
            $cache[$key] = Setting::get($key, $default);
        }
        return $cache[$key];
    }
}
