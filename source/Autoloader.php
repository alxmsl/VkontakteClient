<?php

namespace Vkontakte\Client;

// append autoloader
spl_autoload_register(array('\Vkontakte\Client\Autoloader', 'Autoloader'));

/**
 * Vkontakte API Client classes autoloader
 * @author alxmsl
 * @date 1/13/13
 */
final class Autoloader {
    /**
     * @var array array of available classes
     */
    private static $classes = array(
        'Vkontakte\\Client\\Autoloader'                 => 'Autoloader.php',
        'Vkontakte\\Client\\InitializationInterface'    => 'InitializationInterface.php',
        'Vkontakte\\Client\\ObjectInitializedInterface' => 'ObjectInitializedInterface.php',

        'Vkontakte\\Client\\OAuth\\ServerAuthorization'         => 'OAuth/ServerAuthorization.php',
        'Vkontakte\\Client\\OAuth\\Client'                      => 'OAuth/Client.php',
        'Vkontakte\\Client\\OAuth\\ApplicationAuthorization'    => 'OAuth/ApplicationAuthorization.php',
        'Vkontakte\\Client\\OAuth\\Response\\Code'              => 'OAuth/Response/Code.php',
        'Vkontakte\\Client\\OAuth\\Response\\Error'             => 'OAuth/Response/Error.php',
        'Vkontakte\\Client\\OAuth\\Response\\Token'             => 'OAuth/Response/Token.php',
        'Vkontakte\\Client\\OAuth\\Response\\ResponseFactory'   => 'OAuth/Response/ResponseFactory.php',

        'Vkontakte\\Client\\API\\Client'                    => 'API/Client.php',
        'Vkontakte\\Client\\API\\Response\\Error'           => 'API/Response/Error.php',
        'Vkontakte\\Client\\API\\Response\\ResponseFactory' => 'API/Response/ResponseFactory.php',
    );

    /**
     * Component autoloader
     * @param string $className claass name
     */
    public static function Autoloader($className) {
        if (array_key_exists($className, self::$classes)) {
            $fileName = realpath(dirname(__FILE__)) . '/' . self::$classes[$className];
            if (file_exists($fileName)) {
                include $fileName;
            }
        }
    }
}
