<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pagerfanta\\' => 
            array (
                0 => __DIR__ . '/..' . '/pagerfanta/pagerfanta/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Home' => __DIR__ . '/../..' . '/application/Controllers/Home.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/application/Models/Article.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/application/Models/User.php',
        'helper\\Helper' => __DIR__ . '/../..' . '/helper/Helper.php',
        'system\\Controller' => __DIR__ . '/../..' . '/system/Controller.php',
        'system\\Framework' => __DIR__ . '/../..' . '/system/Framework.php',
        'system\\Model' => __DIR__ . '/../..' . '/system/Model.php',
        'system\\lib\\Twig' => __DIR__ . '/../..' . '/system/lib/Twig.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitab8d10d9fae446e3bc8c7d7ad753dfe3::$classMap;

        }, null, ClassLoader::class);
    }
}