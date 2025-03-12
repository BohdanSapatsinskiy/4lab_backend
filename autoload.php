<?php

// spl_autoload_register(function ($className) {
//     $paths = ['Models/', 'Views/', 'Controllers/'];
    
//     foreach ($paths as $path) {
//         $file = __DIR__ . '/' . $path . $className . '.php';
//         if (file_exists($file)) {
//             require_once $file;
//             return;
//         }
//     }
// });



spl_autoload_register(function ($className) {
    $file = __DIR__ . '/' . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});