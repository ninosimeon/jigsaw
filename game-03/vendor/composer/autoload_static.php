<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb67427abb2971119b8d4f2e75fe745f3
{
    public static $files = array (
        '578d079de5cdba2b05d0af0a658c50d4' => __DIR__ . '/..' . '/crysalead/kahlan/src/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kahlan\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kahlan\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/kahlan/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb67427abb2971119b8d4f2e75fe745f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb67427abb2971119b8d4f2e75fe745f3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}