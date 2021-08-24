<?php

namespace App\Core;
class Request {

    public static function uri(): string
    {
        return trim(
            parse_url(
                filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING),
                PHP_URL_PATH
            ),
            '/'
        );
    }

    public static function method(): string
    {
        return strtoupper(
            filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING),
        );
    }
}