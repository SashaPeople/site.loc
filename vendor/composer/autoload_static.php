<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b3acc95af6e0f636c6444a4f2b39475
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shop\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shop\\' => 
        array (
            0 => __DIR__ . '/..' . '/shop/composer',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b3acc95af6e0f636c6444a4f2b39475::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b3acc95af6e0f636c6444a4f2b39475::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}