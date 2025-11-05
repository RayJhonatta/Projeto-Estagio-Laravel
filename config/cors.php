<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_origins' => explode(',', env('CORS_ALLOWED_ORIGINS', 'http://localhost')), 
    
    'allowed_origins_patterns' => [
        //
    ],

    'allowed_methods' => ['*'],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    
    'supports_credentials' => env('SANCTUM_STATEFUL_DOMAINS') ? true : false, 
];