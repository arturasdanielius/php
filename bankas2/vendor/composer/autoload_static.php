<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a49f116e7f88d6cf2c694dd66b26ea0
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit0a49f116e7f88d6cf2c694dd66b26ea0::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit0a49f116e7f88d6cf2c694dd66b26ea0::$classMap;

        }, null, ClassLoader::class);
    }
}
