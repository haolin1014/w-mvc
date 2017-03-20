<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec2e640daeb1d529505f3f5ad63f7a11
{
    public static $files = array (
        '4211bb913a4c0b6d90252cb9d2fb9e2b' => __DIR__ . '/../..' . '/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec2e640daeb1d529505f3f5ad63f7a11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec2e640daeb1d529505f3f5ad63f7a11::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}