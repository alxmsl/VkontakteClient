<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte;

// append autoloader
spl_autoload_register(array('\Vkontakte\Client\Autoloader', 'autoload'));

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
        'alxmsl\\Vkontakte\\Autoloader'                 => 'Autoloader.php',
        'alxmsl\\Vkontakte\\InitializationInterface'    => 'InitializationInterface.php',
        'alxmsl\\Vkontakte\\ObjectInitializedInterface' => 'ObjectInitializedInterface.php',

        'alxmsl\\Vkontakte\\OAuth\\ServerAuthorization'       => 'OAuth/ServerAuthorization.php',
        'alxmsl\\Vkontakte\\OAuth\\Client'                    => 'OAuth/Client.php',
        'alxmsl\\Vkontakte\\OAuth\\ApplicationAuthorization'  => 'OAuth/ApplicationAuthorization.php',
        'alxmsl\\Vkontakte\\OAuth\\Response\\Code'            => 'OAuth/Response/Code.php',
        'alxmsl\\Vkontakte\\OAuth\\Response\\Error'           => 'OAuth/Response/Error.php',
        'alxmsl\\Vkontakte\\OAuth\\Response\\Token'           => 'OAuth/Response/Token.php',
        'alxmsl\\Vkontakte\\OAuth\\Response\\ResponseFactory' => 'OAuth/Response/ResponseFactory.php',

        'alxmsl\\Vkontakte\\API\\Client'                    => 'API/Client.php',
        'alxmsl\\Vkontakte\\API\\Response\\Error'           => 'API/Response/Error.php',
        'alxmsl\\Vkontakte\\API\\Response\\ResponseFactory' => 'API/Response/ResponseFactory.php',
    );

    /**
     * Component autoloader
     * @param string $className claass name
     */
    public static function autoload($className) {
        if (array_key_exists($className, self::$classes)) {
            $fileName = realpath(dirname(__FILE__)) . '/' . self::$classes[$className];
            if (file_exists($fileName)) {
                include $fileName;
            }
        }
    }
}
