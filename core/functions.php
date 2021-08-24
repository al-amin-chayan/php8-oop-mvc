<?php

if (!function_exists('dd')) {
    
    function dd($data): mixed
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die;
    }
}

if (!function_exists('view')) {
    
    function view(string $name, array $data = [])
    {
        extract($data);

        include BASE_PATH . "app/views/{$name}.view.php";
    }
}

if (!function_exists('redirect')) {
    
    function redirect(string $uri)
    {
        $uri = trim($uri, '/');
        header("Location: /{$uri}");
    }
}