<?php
/**
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 *
 * Non secure users.get example
 * @author alxmsl
 * @date 3/30/13
 */

// Firstly include base class
include('../vendor/autoload.php');

use alxmsl\Vkontakte\API\Client;

// Create API client
$Client = new Client();

// Non-secure method call
$Result = $Client->callNotSecure('users.get', array(
    'uid' => 15380059,
));

// Show result
var_dump($Result);