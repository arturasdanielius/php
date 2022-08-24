<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfb2eb804800951fb5f0122d605bec30
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Petro\\' => 6,
        ),
        'A' => 
        array (
            'Antano\\Belekas\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Petro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/01',
        ),
        'Antano\\Belekas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/02',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/01',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfb2eb804800951fb5f0122d605bec30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfb2eb804800951fb5f0122d605bec30::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitbfb2eb804800951fb5f0122d605bec30::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitbfb2eb804800951fb5f0122d605bec30::$classMap;

        }, null, ClassLoader::class);
    }
}