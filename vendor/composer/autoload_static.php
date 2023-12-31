<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dce1f6fb51812d60309d3d64dfc751c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TCC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TCC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/pastaphp',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dce1f6fb51812d60309d3d64dfc751c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dce1f6fb51812d60309d3d64dfc751c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dce1f6fb51812d60309d3d64dfc751c::$classMap;

        }, null, ClassLoader::class);
    }
}
