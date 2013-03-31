<?php

namespace Vkontakte\Client\OAuth;

use Vkontakte\Client\OAuth\Response\ResponseFactory;

/**
 * Server authorization
 * @author alxmsl
 * @date 3/30/13
 */
final class ServerAuthorization extends Client {
    /**
     * Get access token by user authorization code
     * @param string $code user authorization code
     * @return \Vkontakte\Client\OAuth\Response\Error|\Vkontakte\Client\OAuth\Response\Token token or error instance
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
