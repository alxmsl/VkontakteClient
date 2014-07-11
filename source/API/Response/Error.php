<?php
/*
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace alxmsl\Vkontakte\API\Response;
use alxmsl\Vkontakte\ObjectInitializedInterface;
use stdClass;

/**
 * VK API error response
 * @author alxmsl
 * @date 3/30/13
 */
final class Error implements ObjectInitializedInterface {
    /**
     * @var string error code
     */
    private $code = '';

    /**
     * @var string error message
     */
    private $message = '';

    /**
     * @var array request parameters
     */
    private $parameters = array();

    /**
     * Error code setter
     * @param string $code error code
     * @return Error self
     */
    public function setCode($code) {
        $this->code = (string) $code;
        return $this;
    }

    /**
     * Error code getter
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Error message setter
     * @param string $message error message
     * @return Error self
     */
    public function setMessage($message) {
        $this->message = (string) $message;
        return $this;
    }

    /**
     * Error message getter
     * @return string error message
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Setter for request parameters
     * @param array $parameters request parameters
     * @return Error self
     */
    public function setParameters(array $parameters) {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Request parameters getter
     * @return array request parameters
     */
    public function getParameters() {
        return $this->parameters;
    }

    /**
     * Initialization method
     * @param stdClass $Object object for initialization
     * @return ObjectInitializedInterface initialized object
     */
    public static function initializeByObject(\stdClass $Object) {
        $Error = new self();
        $Error->setCode($Object->error->error_code)
            ->setMessage($Object->error->error_msg);

        if (isset($Object->error->request_params)) {
            $Items = array();
            foreach ($Object->error->request_params as $Item) {
                $Items[$Item->key] = $Item->value;
            }
            $Error->setParameters($Items);
        }
        return $Error;
    }
}
