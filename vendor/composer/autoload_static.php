<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cf75a98fddea49b31f99b29a3bc3ca3
{
    public static $files = array (
        '9e4824c5afbdc1482b6025ce3d4dfde8' => __DIR__ . '/..' . '/league/csv/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cf75a98fddea49b31f99b29a3bc3ca3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cf75a98fddea49b31f99b29a3bc3ca3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
