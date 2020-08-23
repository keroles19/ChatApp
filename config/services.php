<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],'facebook' => [
        'client_id' => '752071862033109',
        'client_secret' => '24c1b8d06a30fe77514f2c9fdd73411f',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],'google' => [
        'client_id' => '45186468180-g3qj3qjpn3j37c9ama5s32uqml0lelr1.apps.googleusercontent.com',
        'client_secret'=>'s9ZFZHAiYmkUYHZNebH1hNux',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

];
