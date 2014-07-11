<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\API\Response;
use stdClass;

/**
 * VK API response factory
 * @author alxmsl
 * @date 3/30/13
 */
final class ResponseFactory {
    /**
     * Create response instance by string
     * @param string $string string response data
     * @return Error|stdClass response instance
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
