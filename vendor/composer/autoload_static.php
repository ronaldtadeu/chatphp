<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf6abcc3ac0e00e47d3d1c5b56ff6c9d
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebSocket\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebSocket\\' => 
        array (
            0 => __DIR__ . '/..' . '/textalk/websocket/lib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf6abcc3ac0e00e47d3d1c5b56ff6c9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf6abcc3ac0e00e47d3d1c5b56ff6c9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf6abcc3ac0e00e47d3d1c5b56ff6c9d::$classMap;

        }, null, ClassLoader::class);
    }
}
