<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc4869c3ea808f6b33e81f7c6c034461
{
    public static $files = array (
        '70e392fbc8a6847b9654d98fd7978d2f' => __DIR__ . '/../..' . '/core/functions.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitdc4869c3ea808f6b33e81f7c6c034461' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitdc4869c3ea808f6b33e81f7c6c034461' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DB' => __DIR__ . '/../..' . '/core/database/DB.php',
        'Query' => __DIR__ . '/../..' . '/core/database/Query.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdc4869c3ea808f6b33e81f7c6c034461::$classMap;

        }, null, ClassLoader::class);
    }
}