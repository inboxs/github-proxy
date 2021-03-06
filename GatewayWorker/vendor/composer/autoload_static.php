<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite69c95f9a095e47d6d5b943de8a25aa3
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/gateway-worker/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite69c95f9a095e47d6d5b943de8a25aa3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite69c95f9a095e47d6d5b943de8a25aa3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
