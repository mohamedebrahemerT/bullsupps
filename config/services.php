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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

'mailgun' => [
    'domain' => 'sandboxea775070e5c9416087903256a1927cdb.mailgun.org',
    'secret' => '4dfb510f8772502178e0b1e348285281-87cdd773-72959f01',
],

'instagram' => [
    'client_id' => '226300992018873',
    'client_secret' => '5c1e23bf353f1a86293ba5a159022f1a',
    'redirect' => 'http://localhost/dashboard/old/alymarket3/public/login/instagram/callback'
],


 

   'facebook' => [
     'client_id' => '3792378860803127',
     'client_secret' =>'44606fc393ade269ec8aa5ff1d8aa6c8',
    // 'redirect' => 'https://ac4mt.org/callback/facebook/',
     'redirect' => 'https://alymarket.net/callback/callback/facebook/',
   ], 


    'twitter' => [ //change it to any provider
        'client_id' => 'UJD5V2ycRzrOTGlkOeHQNLmNS',
        'client_secret' => 'CqrC96WAB0mIUOeH6ptQZre2m8apV9hYj8FOhF653c5xSvGk5j',
        'redirect' => 'https://alymarket.net/callback/twitter',
    ],
 'google' => [
    'client_id'=>'54017306227-ududif17bj6i7f22ka6ops3kqmj0e46i.apps.googleusercontent.com',
    'client_secret' =>'t7h9Ruml1PGCK4NfoFxxh63K',
     'redirect'      =>'https://bullsupps.shoplystock.com/callback/google',
], 
 
    
'linkedin' => [
    'client_id' => '86qcx5999qgk83',         // Your LinkedIn Client ID
    'client_secret' =>'6LwC7uD4rTsdINbT', // Your LinkedIn Client Secret
    'redirect' => 'https://alymarket.net/callback/linkedin',       // Your LinkedIn Callback URL
],

 'github' => [
        'client_id'     => '926d77930d84980437e1',
        'client_secret' => '47ddd4580da560bc48b637dd1bf1a3772f4d9a7b',
        'redirect'      => 'https://ac4mt.com/callback/github',
    ],



];
