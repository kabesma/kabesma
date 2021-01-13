<?php

return [

    /*
    |-----------------------------------------------------------
    | View Paths for admin panel
    |-----------------------------------------------------------
    |
    | You can change this path if you have self panel admin
    |
    |
     */

    'view' => 'views/backend',

    'backend' => '',
 
    /*
    |-----------------------------------------------------------
    | Url Paths for admin panel
    |-----------------------------------------------------------
    |
    | You can change this path if you have self panel admin
    | Don't forget change protected $redirectTo in App/Http/Auth/LoginControlller
    |
     */
   
    'url' => [
        'admin' => 'admin',
    ],
];
