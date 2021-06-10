<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b0109f23dea43ef807d45bd30a0fad2
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tie\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tie\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b0109f23dea43ef807d45bd30a0fad2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b0109f23dea43ef807d45bd30a0fad2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b0109f23dea43ef807d45bd30a0fad2::$classMap;

        }, null, ClassLoader::class);
    }
}