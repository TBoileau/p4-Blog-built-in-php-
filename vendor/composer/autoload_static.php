<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab251815d9271268869eb849c34961ef
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab251815d9271268869eb849c34961ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab251815d9271268869eb849c34961ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
