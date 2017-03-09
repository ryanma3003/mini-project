<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '559799702258-bi67sfgujkra0qbdvkou9c9d0ug5n6p7.apps.googleusercontent.com',
        'client_secret' => 'eZJXzYsGKsDzEheJANmkmOdD',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

    'twitter' => [
    'client_id' => 'Wo97B1eLQZgD1j8XkPRjUUECV',
    'client_secret' => 'sFDwt1tS7qqQelHvUAhgzI6noGjqfqRFcBgBHrMdIz56MR4zyx',
    'redirect' => 'http://localhost:8000/callback/twitter',
    ],

    'facebook' => [
    'client_id' => '631011857103011',
    'client_secret' => '009ab20e98e6e7235734623cfdc8cda7',
    'redirect' => 'http://localhost:8000/callback/facebook',
    ],

];
