<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb59d333792f99c5c23653b7acee557d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Antare74\\ResponseFormatter\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Antare74\\ResponseFormatter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/response-formatter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb59d333792f99c5c23653b7acee557d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb59d333792f99c5c23653b7acee557d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb59d333792f99c5c23653b7acee557d::$classMap;

        }, null, ClassLoader::class);
    }
}
