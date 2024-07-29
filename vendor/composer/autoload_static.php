<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6791d4014052d0b19e922fe57b3ec1c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6791d4014052d0b19e922fe57b3ec1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6791d4014052d0b19e922fe57b3ec1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6791d4014052d0b19e922fe57b3ec1c::$classMap;

        }, null, ClassLoader::class);
    }
}
