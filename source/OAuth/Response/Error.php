<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\OAuth\Response;
use alxmsl\Vkontakte\InitializationInterface;

/**
 * Authorization error
 * @author alxmsl
 * @date 3/30/13
 */
final class Error implements InitializationInterface {
    /**
     * @var string authorization error
     */
    private $error = '';

    /**
     * @var string authorization error description
     */
    private $description = '';

    private function __construct() {}

    /**
     * Setter for authorization error description
     * @param string $description authorization error description
     * @return Error self
     */
    public function setDescription($description) {
        $this->description = (string) $description;
        return $this;
    }

    /**
     * Authorization error description getter
     * @return string authorization error description
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Setter for authorization error code
     * @param string $error error code
     * @return Error self
     */
    public function setError($error) {
        $this->error = (string) $error;
        return $this;
    }

    /**
     * Authorization error code getter
     * @return string error code
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Method for object initialization by the string
     * @param string $string response string with error data
     * @return Error response object
     */
    public static function initializeByString($string) {
        $data = array();
        parse_str($string, $data);
        $Error = new self();
        $Error->setError($data['error'])
            ->setDescription($data['error_description']);
        return $Error;
    }
}
