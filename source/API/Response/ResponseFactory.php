<?php

namespace Vkontakte\Client\API\Response;

/**
 * VK API response factory
 * @author alxmsl
 * @date 3/30/13
 */
final class ResponseFactory {
    /**
     * Create response instance by string
     * @param string $string string response data
     * @return Error|\stdClass response instance
     */
    public static function createResponse($string) {
        $Object = json_decode($string);
        if (isset($Object->error)) {
            return Error::initializeByObject($Object);
        } else {
            return $Object->response;
        }
    }
}
