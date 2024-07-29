<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('isRoute')) {
    /**
     * Get the active view.
     *
     * @param  string  $value
     * @return string
     */
    function isRoute($value): string
    {
        return Route::is($value) ? 'true' : 'false';
    }
}
