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

License
-------
Copyright © 2014 Alexey Maslov <alexey.y.maslov@gmail.com>
This work is free. You can redistribute it and/or modify it under the
terms of the Do What The Fuck You Want To Public License, Version 2,
as published by Sam Hocevar. See the COPYING file for more details.
