<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60e35f9a4747a0287c8a40263d72aef5
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60e35f9a4747a0287c8a40263d72aef5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60e35f9a4747a0287c8a40263d72aef5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60e35f9a4747a0287c8a40263d72aef5::$classMap;

        }, null, ClassLoader::class);
    }
}
