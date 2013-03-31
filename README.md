Vkontakte API Client
============

Installation
-------

For install library completely, you need to update submodules after checkout. For example:

    git clone git://github.com/alxmsl/VkontakteClient.git temp
    && cd temp
    && git submodule init
    && git submodule update

Authorization example
-------



Non-secure method call example
-------

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