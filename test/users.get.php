<?php
/**
 * Non secure users.get example
 * @author alxmsl
 * @date 3/30/13
 */

// Firstly include base class
include('../source/Autoloader.php');
include '../lib/Network/source/Autoloader.php';

// Create API client
$Client = new \Vkontakte\Client\API\Client();

// Non-secure method call
$Result = $Client->callNotSecure('users.get', array(
    'uid' => 15380059,
));

// Show result
var_dump($Result);