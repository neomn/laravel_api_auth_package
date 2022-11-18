<?php

// set registration method to true/false to set them enable/disable
$registrationMethods = [
    'phone_number'=>true,
    'email'=>true,
    'username'=>true,
    'social_media'=>true,
];

$loginMethods = [
    'username'=>true,
    'email'=>true,
    'phone_number'=>true,
    'social_media'=>true,
];

$twoFactorAuthMethod = [
    'phone_number'=>true,
    'email'=>true,
    'google_authenticator'=>true,
];

return [
    'auth'=>[
        'defaultAuthMethod'=> $authMethods['username'],
        'defaultTwoFactorAuthMethod'=>'disable',
    ],
];
