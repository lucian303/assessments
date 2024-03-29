<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebcbcbc5fb0253c355d9c31e2a079ebe
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebcbcbc5fb0253c355d9c31e2a079ebe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebcbcbc5fb0253c355d9c31e2a079ebe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
