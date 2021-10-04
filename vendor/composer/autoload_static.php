<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42d3c8588dfd944a515b5d07c8617bb3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42d3c8588dfd944a515b5d07c8617bb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42d3c8588dfd944a515b5d07c8617bb3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42d3c8588dfd944a515b5d07c8617bb3::$classMap;

        }, null, ClassLoader::class);
    }
}
