<?php

use lesson7\App\User;

require __DIR__ . '\..\..\vendor\autoload.php';

$user = new User();

$user->setUsername("seregapirate1337");
$user->setemail("seregapirate1337@gmail.com");
$user->setPassword("124132");

print($user->getUsername() . "\n");
print($user->getEmail() . "\n");
print($user->getPassword() . "\n");