<?php

if (!function_exists('translate')) {
    function translate($text)
    {
        return ucfirst(\App\Helpers\Translations::translate($text));
    }
}