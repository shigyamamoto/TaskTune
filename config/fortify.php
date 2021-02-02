<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [
    'guard' => 'web',
    'passwords' => 'users',
    'username' => 'name',
    'email' => 'email',
    'home' => RouteServiceProvider::HOME,
    'prefix' => '',
    'domain' => null,
    'middleware' => ['web'],
    'limiters' => [
        'login' => 3,
        'two-factor' => 'two-factor',
    ],
    'views' => true,
    'features' => [
//        Features::registration(),
//        Features::resetPasswords(),
//        // Features::emailVerification(),
//        Features::updateProfileInformation(),
//        Features::updatePasswords(),
//        Features::twoFactorAuthentication([
//            'confirmPassword' => true,
//        ]),
    ],

];
