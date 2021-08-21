<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfca11582923dc0a3811ba72646658dc2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfca11582923dc0a3811ba72646658dc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfca11582923dc0a3811ba72646658dc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfca11582923dc0a3811ba72646658dc2::$classMap;

        }, null, ClassLoader::class);
    }
}
