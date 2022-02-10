<?php

return [
	
	/*
    |--------------------------------------------------------------------------
    | Stripe API Secret
    |--------------------------------------------------------------------------
    |
    | This option will be the API secret that will be used in the stripe API
    | request.
    |
    */

    'secret' => env('STRIPE_SECRET', 'FAKE_STRIPE_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Stripe API Base URL
    |--------------------------------------------------------------------------
    |
    | This option will be the API base URL. Initailly this will contain the sandbox
    | API URL of stripe. For production phase, you may change the value of this option.
    |
    */

    'base_url' => env('STRIPE_BASE_URL', 'UNKNOWN_STRIPE_BASE_URL'),
];