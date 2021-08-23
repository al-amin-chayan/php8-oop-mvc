<?php

class App {

    public static array $registry = [];

    public static function bind(string $key, mixed $value): void
    {
        self::$registry[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        if (! array_key_exists($key, self::$registry)) {
            throw new Exception("No binding found for key {$key}");
        }
        
        return self::$registry[$key];
    }
}