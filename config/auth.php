<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'users_test' => [
            'driver' => 'session',
            'provider' => 'users_tests',
          ],

        'users_bookmap' => [
            'driver' => 'session',
            'provider' => 'users_bookmaps',
        ],

        'users_comiziamo' => [
            'driver' => 'session',
            'provider' => 'users_comiziamos',
        ],

        'users_promotion' => [
            'driver' => 'session',
            'provider' => 'users_promotions',
        ],

        'users_ileniadesign' => [
            'driver' => 'session',
            'provider' => 'users_ileniadesigns',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'users_tests' => [
            'driver' => 'eloquent',
            'model' => App\Users_test::class,
        ],  
        
        'users_bookmaps' => [
            'driver' => 'eloquent',
            'model' => App\Users_bookmap::class,
        ],

        'users_comiziamos' => [
            'driver' => 'eloquent',
            'model' => App\Users_comiziamo::class,
        ],

        'users_promotions' => [
            'driver' => 'eloquent',
            'model' => App\Users_promotion::class,
        ],

        'users_ileniadesigns' => [
            'driver' => 'eloquent',
            'model' => App\Users_ileniadesign::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'users_tests' => [
            'provider' => 'users_tests',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'users_bookmaps' => [
            'provider' => 'users_bookmaps',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'users_comiziamos' => [
            'provider' => 'users_comiziamos',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'users_promotions' => [
            'provider' => 'users_promotions',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'users_ileniadesigns' => [
            'provider' => 'users_ileniadesigns',
            'table' => 'password_resets',
            'expire' => 60,
        ],

    ],

];
