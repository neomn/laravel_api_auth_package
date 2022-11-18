<?php

// set registration method to true/false to set them enable/disable
$registrationMethods = [
    'phone_number'=>true,
    'email'=>true,
    'username'=>true,
    'social_media'=>true,
];

$authMethods = [
    'username'=>'username',
    'email'=>'email',
    'phone_number'=>'phone_number',
    'social_media'=>'social_media',
];

$twoFactorAuthMethod = [
    'phone_number'=>'phone_number',
    'email'=>'email',
    'google_authenticator'=>'google_authenticator',
];

return [
    'auth'=>[
        'defaultAuthMethod'=> $authMethods['username'],
        'defaultTwoFactorAuthMethod'=>'disable',
    ],
];
