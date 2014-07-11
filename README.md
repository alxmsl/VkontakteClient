Vkontakte API Client
============

Simple client for Vkontakte API

Installation
-------

Require packet in a composer.json

    "alxmsl/vkontakteclient": ">=1.0.0"

Run Composer: `php composer.phar install`

Non-secure method call example
-------

    // Create API client
    $Client = new \Vkontakte\Client\API\Client();

    // Non-secure method call
    $Result = $Client->callNotSecure('users.get', array(
        'uid' => 15380059,
    ));

    // Show result
    var_dump($Result);
