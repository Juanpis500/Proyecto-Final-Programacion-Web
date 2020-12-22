<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04cf2798f214f9ceaf8479bd4d3fcf95
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ischop\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ischop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04cf2798f214f9ceaf8479bd4d3fcf95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04cf2798f214f9ceaf8479bd4d3fcf95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04cf2798f214f9ceaf8479bd4d3fcf95::$classMap;

        }, null, ClassLoader::class);
    }
}