<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\OAuth;
use alxmsl\Vkontakte\OAuth\Response\ResponseFactory;
use alxmsl\Vkontakte\OAuth\Response\Token;
use alxmsl\Vkontakte\OAuth\Response\Error;

/**
 * Application authorization
 * @author alxmsl
 * @date 3/30/13
 */
final class ApplicationAuthorization extends Client {
    /**
     * Authorize method
     * @return Token|Error token or error instance
     */
    public function authorize() {
        $Request = $this->getRequest(self::ENDPOINT_ACCESS_TOKEN_REQUEST);
        $Request->addPostField('client_id', $this->getClientId())
            ->addPostField('client_secret', $this->getClientSecret())
            ->addPostField('grant_type', self::GRANT_TYPE_CLIENT_CREDENTIALS);
        return ResponseFactory::createResponse($Request->send());
    }
}
