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

if (! function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}