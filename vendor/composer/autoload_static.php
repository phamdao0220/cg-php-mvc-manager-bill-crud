<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27646a8599894e6aed1e833d8f58ff63
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27646a8599894e6aed1e833d8f58ff63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27646a8599894e6aed1e833d8f58ff63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27646a8599894e6aed1e833d8f58ff63::$classMap;

        }, null, ClassLoader::class);
    }
}
