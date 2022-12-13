<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13bab6378a43407d10d0d7c2245556e0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Services\\Page' => __DIR__ . '/../..' . '/app/Services/Page.php',
        'App\\Services\\Router' => __DIR__ . '/../..' . '/app/Services/Router.php',
        'App\\Tables\\Author' => __DIR__ . '/../..',
        'App\\Controller\\Base_API' => __DIR__ . '/../..',
        'App\\Controller\\Comment' => __DIR__ . '/../..',
        'App\\Controller\\Post' => __DIR__ . '/../..',
        'App\\Controller\\Role' => __DIR__ . '/../..',
        'App\\Controller\\Tag' => __DIR__ . '/../..',
        'App\\Controller\\User' => __DIR__ . '/../..',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13bab6378a43407d10d0d7c2245556e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13bab6378a43407d10d0d7c2245556e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13bab6378a43407d10d0d7c2245556e0::$classMap;

        }, null, ClassLoader::class);
    }
}
