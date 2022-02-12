<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc4fa66a5c2238ecee084746980f54c8
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc4fa66a5c2238ecee084746980f54c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc4fa66a5c2238ecee084746980f54c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc4fa66a5c2238ecee084746980f54c8::$classMap;

        }, null, ClassLoader::class);
    }
}
