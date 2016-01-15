<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\API;

use alxmsl\Vkontakte\API\Response\ResponseFactory;
use alxmsl\Vkontakte\API\Response\Error;
use alxmsl\Vkontakte\OAuth\Response\Token;
use alxmsl\Vkontakte\OAuth\Client as OAuthClient;
use alxmsl\Network\Http\Request;

/**
 * VK API Client Interface
 * @author ilesnykh
 */
interface ClientInterface {
    /**
     * Authorization token setter
     * @param Token $Token authorization token instance
     * @return ClientInterface
     */
    public function setToken(Token $Token);

    /**
     * Authorization token getter
     * @return Token authorization token instance
     */
    public function getToken();

    /**
     * Secure call VK API nethod
     * @param string $method method name
     * @param array $get GET method parameters
     * @param array $post POST method parameters
     * @return Error|\stdClass error or result instance
     */
    public function callSecure($method, array $get = null, array $post = null);

    /**
     * Non-secure call VK API method
     * @param string $method method name
     * @param array $get GET method parameters
     * @param array $post POST method parameters
     * @return Error|\stdClass error or result instance
     */
    public function callNotSecure($method, array $get = null, array $post = null);
}
