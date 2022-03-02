<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
function includeDirectore($dir)
{

    function thisconsolelog($data)
    {

        $output     =    "<script>console.log( '";

        $output     .=   $data;

        $output     .=   "' );</script>";

        echo        $output;
    }
    //    thisconsolelog('files included : ');

    $files = glob($dir . '/*.php');

    foreach ($files as $file) {

        if ($file != __FILE__) {

            require_once($file);
        }

        //        thisconsolelog($file);
    }

    //    thisconsolelog('end files included : ');
}
includeDirectore('app/DucFunction');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

require_once __DIR__ . '/public/index.php';