<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72832334ecbaab58ac66bb39c0b093fd
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wqpay\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wqpay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72832334ecbaab58ac66bb39c0b093fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72832334ecbaab58ac66bb39c0b093fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
