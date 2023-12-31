<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd625fdb8639602574d7126fe376d411a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'avadim\\FastExcelReader\\' => 23,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'avadim\\FastExcelReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/avadim/fast-excel-reader/src/FastExcelReader',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd625fdb8639602574d7126fe376d411a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd625fdb8639602574d7126fe376d411a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd625fdb8639602574d7126fe376d411a::$classMap;

        }, null, ClassLoader::class);
    }
}
