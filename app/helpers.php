<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('titleHelpers')) {
    function titleHelpers($title)
    {
        $baseTitle = 'Laracarte- List of Artisans';
        if ($title == '') {
            return $baseTitle;
        } else {
            return $title . ' | ' . $baseTitle;
        }
    }
}


if (!function_exists('liHelpers')) {
    function liHelpers($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
