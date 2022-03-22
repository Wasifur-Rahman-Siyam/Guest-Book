<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9438b92c880f96e498a27e67930c5062
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9438b92c880f96e498a27e67930c5062::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9438b92c880f96e498a27e67930c5062::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9438b92c880f96e498a27e67930c5062::$classMap;

        }, null, ClassLoader::class);
    }
}
