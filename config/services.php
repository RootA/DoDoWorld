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

    'braintree' => [
      'model'  => App\User::class,
      'environment' => env('BRAINTREE_ENV'),
      'merchant_id' => env('v9sc8w8wp4nj8qdw'),
      'public_key' => env('dtjcpnp3t29qjqbz'),
      'private_key' => env('7a69be6e85f6731f71b8aff16b7989bd'),
  ],
  'paypal' => [
        'client_id' => 'paypal_client_id',
        'secret' => 'paypal_secret'
    ],

];
