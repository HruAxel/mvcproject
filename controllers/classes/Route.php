<?php

namespace controllers\classes;

class Route
{

   private static function scheme($url, $fn, $method) {
    $act_url = $_SERVER["REQUEST_URI"];

    if ($act_url === $url && $_SERVER["REQUEST_METHOD"] === $method) {
        call_user_func($fn);

        exit;
    }
    }

    static function get($url, $fn)
    {
        self::scheme($url, $fn, 'GET');
    }

    static function post($url, $fn)
    {
        self::scheme($url, $fn, 'POST');
        }
    }

