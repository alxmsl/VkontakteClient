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
use alxmsl\Vkontakte\OAuth\Response\Error;
use alxmsl\Vkontakte\OAuth\Response\Token;

/**
 * Server authorization
 * @author alxmsl
 * @date 3/30/13
 */
final class ServerAuthorization extends Client {
    /**
     * Get access token by user authorization code
     * @param string $code user authorization code
     * @return Error|Token token or error instance
     */
    public function authorize($code) {
        $Request = $this->getRequest(self::ENDPOINT_ACCESS_TOKEN_REQUEST);
        $Request->addPostField('code', $code)
            ->addPostField('client_id', $this->getClientId())
            ->addPostField('client_secret', $this->getClientSecret())
            ->addPostField('redirect_uri', $this->getRedirectUri());
        return ResponseFactory::createResponse($Request->send());
    }
}
