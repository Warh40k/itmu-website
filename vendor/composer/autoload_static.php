<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e81ba9d3a5541248a78d33c6f7884a5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MathPHP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MathPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/markrogoyski/math-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e81ba9d3a5541248a78d33c6f7884a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e81ba9d3a5541248a78d33c6f7884a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e81ba9d3a5541248a78d33c6f7884a5::$classMap;

        }, null, ClassLoader::class);
    }
}