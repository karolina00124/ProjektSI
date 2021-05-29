<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage_index', '_controller' => 'App\\Controller\\HomePageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/kategoria' => [[['_route' => 'kategoria_index', '_controller' => 'App\\Controller\\KategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/kategoria/create' => [[['_route' => 'kategoria_create', '_controller' => 'App\\Controller\\KategoriaController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/przepis' => [[['_route' => 'przepis_index', '_controller' => 'App\\Controller\\PrzepisController::index'], null, null, null, true, false, null]],
        '/record/list' => [[['_route' => 'record_index', '_controller' => 'App\\Controller\\RecordController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/task/list' => [[['_route' => 'task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/kategoria/(?'
                    .'|([1-9]\\d*)(*:193)'
                    .'|([1-9]\\d*)/edit(*:216)'
                    .'|([1-9]\\d*)/delete(*:241)'
                .')'
                .'|/przepis/([1-9]\\d*)(*:269)'
                .'|/record/([1-9]\\d*)(*:295)'
                .'|/ta(?'
                    .'|g/([1-9]\\d*)(*:321)'
                    .'|sk/list/([1-9]\\d*)(*:347)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'kategoria_show', '_controller' => 'App\\Controller\\KategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'kategoria_edit', '_controller' => 'App\\Controller\\KategoriaController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        241 => [[['_route' => 'kategoria_delete', '_controller' => 'App\\Controller\\KategoriaController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        269 => [[['_route' => 'przepis_show', '_controller' => 'App\\Controller\\PrzepisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'record_show', '_controller' => 'App\\Controller\\RecordController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        347 => [
            [['_route' => 'task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
