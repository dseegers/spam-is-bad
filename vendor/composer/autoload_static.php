<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f93004ba4809569106056fd5ea1139d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flx\\StructuredData\\' => 19,
            'Flx\\MetaBox\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flx\\StructuredData\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Flx\\MetaBox\\' => 
        array (
            0 => __DIR__ . '/..' . '/dseegers/hello-meta-box/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f93004ba4809569106056fd5ea1139d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f93004ba4809569106056fd5ea1139d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
