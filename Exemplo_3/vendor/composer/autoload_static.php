<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb904747bb6ee605252bf6a2cc817a4b8
{
    public static $classMap = array (
        'Compra' => __DIR__ . '/../..' . '/Vendas/Compra.php',
        'Estoque' => __DIR__ . '/../..' . '/Estoque/Estoque.php',
        'Produto' => __DIR__ . '/../..' . '/Vendas/Produto.php',
        'Usuario' => __DIR__ . '/../..' . '/Vendas/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb904747bb6ee605252bf6a2cc817a4b8::$classMap;

        }, null, ClassLoader::class);
    }
}
