<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1994d39233adf69be5b96857b31f2c04
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nsm\\Hakim\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nsm\\Hakim\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1994d39233adf69be5b96857b31f2c04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1994d39233adf69be5b96857b31f2c04::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1994d39233adf69be5b96857b31f2c04::$classMap;

        }, null, ClassLoader::class);
    }
}
