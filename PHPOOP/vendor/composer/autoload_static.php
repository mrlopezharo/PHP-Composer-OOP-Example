<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c67daa01a56cdda02943b410e94def0
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ricardo\\Phpoop\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ricardo\\Phpoop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c67daa01a56cdda02943b410e94def0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c67daa01a56cdda02943b410e94def0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c67daa01a56cdda02943b410e94def0::$classMap;

        }, null, ClassLoader::class);
    }
}
