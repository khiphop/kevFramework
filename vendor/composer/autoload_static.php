<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8434e788cabed377c68ace504a0dae94
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
        'B' => 
        array (
            'Bsexception\\Dev\\' => 16,
            'BjphpLog\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/Models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/Controllers',
        ),
        'Bsexception\\Dev\\' => 
        array (
            0 => __DIR__ . '/..' . '/bsexception/dev',
        ),
        'BjphpLog\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjphp/log/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8434e788cabed377c68ace504a0dae94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8434e788cabed377c68ace504a0dae94::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8434e788cabed377c68ace504a0dae94::$classMap;

        }, null, ClassLoader::class);
    }
}
