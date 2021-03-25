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



    // untuk menarik id client 
    'google' => [

        'client_id' => '1008059115798-0pimpmlmaj2rhp64c7m6o3arukfqe031.apps.googleusercontent.com',
        'client_secret' => 'ICcCmLiBSwC0UtsRt04ZNdZi',
        'redirect' => 'http://localhost:8000/auth/google/callback', //ubah localhost:8000 sesuai dengan nama domain jika sudah dimasukkan ke server dan ubah di credential google
    ],

    'facebook' => [
        'client_id' => '260225068814695',
        'client_secret' => '4f2b977ee8ad9afcb2cace66743d3351',
        'redirect' => 'http://localhost:8000/auth/facebook/callback', //ubah localhost:8000 sesuai dengan nama domain jika sudah dimasukkan ke server
    ],

];
