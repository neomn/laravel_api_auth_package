<?php

$registerMethods = [
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
