<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33c22a21f4fd944335c2d17f2c671626
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33c22a21f4fd944335c2d17f2c671626::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33c22a21f4fd944335c2d17f2c671626::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33c22a21f4fd944335c2d17f2c671626::$classMap;

        }, null, ClassLoader::class);
    }
}
