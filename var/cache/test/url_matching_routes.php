<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'About', '_controller' => 'App\\Controller\\AboutMeController::aboutMe'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'Contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Root', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/work' => [[['_route' => 'Work', '_controller' => 'App\\Controller\\WorkController::Work'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
