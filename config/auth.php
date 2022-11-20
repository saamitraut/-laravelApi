<?php

return [

    'guards' => [

        'web' => [

            'driver' => 'session',

            'provider' => 'users',
        ],

        'api' => [

            'driver' => 'passport', //NEW

            'provider' => 'users',

        ],

    ]
 
];