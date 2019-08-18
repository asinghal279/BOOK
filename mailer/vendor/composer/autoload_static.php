<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd563594e464c02d43a2cba24946674e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd563594e464c02d43a2cba24946674e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd563594e464c02d43a2cba24946674e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
