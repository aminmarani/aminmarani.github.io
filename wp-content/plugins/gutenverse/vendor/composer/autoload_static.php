<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b41c3c5ad7bc4bb9b12db37b39f9ce8
{
    public static $files = array (
        '35e59de4710b0d6ef1e7e82248a7a88e' => __DIR__ . '/..' . '/frozzare/wp-autoload/src/autoload.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6b41c3c5ad7bc4bb9b12db37b39f9ce8::$classMap;

        }, null, ClassLoader::class);
    }
}
