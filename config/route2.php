<?php

use \Anax\Route\Router;

/**
 * Configuration file for routes.
 */
return [
    //"mode" => Router::DEVELOPMENT, // default, verbose execeptions
    //"mode" => Router::PRODUCTION,  // exceptions turn into 500

    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // These are for internal error handling and exceptions
            "mount" => null,
            "file" => __DIR__ . "/route2/internal.php",
        ],
        [
            // For debugging and development details on Anax
            "mount" => "debug",
            "file" => __DIR__ . "/route2/debug.php",
        ],
        [
            // To read flat file content in Markdown from content/
            "mount" => null,
            "file" => __DIR__ . "/route2/flat-file-content.php",
        ],
        [
            // Routes for remserver
            "mount" => "api",
            "file" => __DIR__ . "/route2/remserver.php",
        ],
        [
            // Add routes from commentController and mount on comment/
            "mount" => "comment",
            "file" => __DIR__ . "/route2/commentController.php",
        ],
        [
            // Add routes from userController and mount on user/
            "mount" => "user",
            "file" => __DIR__ . "/route2/userController.php",
        ],
        [
            // Keep this last since its a catch all
            "mount" => null,
            "sort" => 999,
            "file" => __DIR__ . "/route2/404.php",
        ],
    ],

];
