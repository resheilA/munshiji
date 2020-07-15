<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33ce5fdeda6e6ef41e3b8f734c29ba24
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33ce5fdeda6e6ef41e3b8f734c29ba24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33ce5fdeda6e6ef41e3b8f734c29ba24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
