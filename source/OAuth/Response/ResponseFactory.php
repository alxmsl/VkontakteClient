<?php

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
