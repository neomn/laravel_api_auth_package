<?php

$authMethods = [
    'username'=>'username',
    'email'=>'email',
    'phone_number'=>'phone_number',
    'social_media'=>'social_media',
];

return [
    'auth'=>[
        'authDefaultMethod'=> $authMethods['username'],
        '2factorAuth'=>false,
    ],
];
