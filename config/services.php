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

    'last-fm' => [
        'api_key' => env('LAST_FM_API_KEY'),
        'users' => explode(',', env('LAST_FM_USERS')),
    ],

    'packagist' => [
        'vendor' => env('PACKAGIST_VENDOR'),
    ],

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

    'orgmanager' => [
        'token' => env('ORGMANAGER_TOKEN'),
        'url' => env('ORGMANAGER_URL', 'https://orgmanager.miguelpiedrafita.com'),
    ],

];
