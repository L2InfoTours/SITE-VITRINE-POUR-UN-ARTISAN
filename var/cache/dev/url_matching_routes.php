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
        '/admin' => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/admin/new' => [[['_route' => 'admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'demande_devis', '_controller' => 'App\\Controller\\DemandeDevisController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/image/new' => [[['_route' => 'image_new', '_controller' => 'App\\Controller\\ImageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/chantier' => [[['_route' => 'type_chantier_index', '_controller' => 'App\\Controller\\TypeChantierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/chantier/new' => [[['_route' => 'type_chantier_new', '_controller' => 'App\\Controller\\TypeChantierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/admin/([^/]++)(?'
                    .'|(*:152)'
                    .'|/edit(*:165)'
                    .'|(*:173)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:194)'
                    .'|/edit(*:207)'
                    .'|(*:215)'
                .')'
                .'|/new(*:228)'
                .'|/([^/]++)(?'
                    .'|(*:248)'
                    .'|/edit(*:261)'
                    .'|(*:269)'
                .')'
                .'|/home(*:283)'
                .'|/image(?'
                    .'|(*:300)'
                    .'|/([^/]++)(?'
                        .'|(*:320)'
                        .'|/edit(*:333)'
                        .'|(*:341)'
                    .')'
                .')'
                .'|/type/chantier/([^/]++)(?'
                    .'|(*:377)'
                    .'|/edit(*:390)'
                    .'|(*:398)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:435)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        152 => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        165 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        173 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        194 => [[['_route' => 'chantier_show', '_controller' => 'App\\Controller\\ChantierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'chantier_edit', '_controller' => 'App\\Controller\\ChantierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'chantier_delete', '_controller' => 'App\\Controller\\ChantierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        228 => [[['_route' => 'demande_devis_new', '_controller' => 'App\\Controller\\DemandeDevisController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'demande_devis_show', '_controller' => 'App\\Controller\\DemandeDevisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'demande_devis_edit', '_controller' => 'App\\Controller\\DemandeDevisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'demande_devis_delete', '_controller' => 'App\\Controller\\DemandeDevisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        283 => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], [], null, null, false, false, null]],
        300 => [[['_route' => 'image_index', '_controller' => 'App\\Controller\\ImageController::index'], [], ['GET' => 0], null, true, false, null]],
        320 => [[['_route' => 'image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'type_chantier_show', '_controller' => 'App\\Controller\\TypeChantierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'type_chantier_edit', '_controller' => 'App\\Controller\\TypeChantierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'type_chantier_delete', '_controller' => 'App\\Controller\\TypeChantierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        435 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
