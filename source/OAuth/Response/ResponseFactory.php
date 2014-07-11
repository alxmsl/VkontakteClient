<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\OAuth\Response;

/**
 * VK OAuth response instances factory
 * @author alxmsl
 * @date 3/30/13
 */
final class ResponseFactory {
    /**
     * Create VK OAuth response instance
     * @param string $string response data
     * @return Code|Error|Token|null response instance
     */
    public static function createResponse($string) {
        $data = parse_url($string, PHP_URL_QUERY | PHP_URL_FRAGMENT);
        switch (true) {
            case isset($data['fragment']):
                return Token::initializeByString($data['fragment']);
            case isset($data['query']) && (strpos($data['query'], 'error=') !== false):
                return Error::initializeByString($data['query']);
            case isset($data['query']) && (strpos($data['query'], 'error=') === false):
                return Code::initializeByString($data['query']);
        }
    }
}
