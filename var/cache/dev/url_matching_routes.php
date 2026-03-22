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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/playlists' => [[['_route' => 'playlists', '_controller' => 'App\\Controller\\PlaylistsController::index'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin.categories', '_controller' => 'App\\Controller\\admin\\AdminCategorieController::index'], null, null, null, false, false, null]],
        '/admin/categories/add' => [[['_route' => 'admin.categories.add', '_controller' => 'App\\Controller\\admin\\AdminCategorieController::ajouterCategorie'], null, ['POST' => 0], null, false, false, null]],
        '/admin/formation' => [[['_route' => 'admin.formation', '_controller' => 'App\\Controller\\admin\\AdminformationController::index'], null, null, null, false, false, null]],
        '/admin/formation/add' => [[['_route' => 'admin.formation.add', '_controller' => 'App\\Controller\\admin\\AdminformationController::ajouterformation'], null, null, null, false, false, null]],
        '/admin/playlist' => [[['_route' => 'admin.playlist', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::index'], null, null, null, false, false, null]],
        '/admin/playlist/add' => [[['_route' => 'admin.playlist.add', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::ajouterplaylist'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:252)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:292)'
                    .'|formation/([^/]++)(*:318)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:362)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:402)'
                    .'|playlist/([^/]++)(*:427)'
                .')'
                .'|/admin/(?'
                    .'|categorie/suppr/([^/]++)(*:470)'
                    .'|formation(?'
                        .'|/(?'
                            .'|index/(?'
                                .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:538)'
                                .'|recherche/([^/]++)(?:/([^/]++))?(*:578)'
                            .')'
                            .'|edit/([^/]++)(*:600)'
                        .')'
                        .'|\\.suppr/([^/]++)(*:625)'
                    .')'
                    .'|playlist(?'
                        .'|s/index/(?'
                            .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:691)'
                            .'|recherche/([^/]++)(?:/([^/]++))?(*:731)'
                        .')'
                        .'|/(?'
                            .'|edit/([^/]++)(*:757)'
                            .'|suppr/([^/]++)(*:779)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        292 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        318 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        402 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        427 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'admin.categorie.suppr', '_controller' => 'App\\Controller\\admin\\AdminCategorieController::delete'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'admin.formation.sort', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminformationController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        578 => [[['_route' => 'admin.formation.findAllContain', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminformationController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        600 => [[['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\admin\\AdminformationController::edit'], ['id'], null, null, false, true, null]],
        625 => [[['_route' => 'admin.formation.suppr', '_controller' => 'App\\Controller\\admin\\AdminformationController::delete'], ['id'], null, null, false, true, null]],
        691 => [[['_route' => 'admin.playlist.sort', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        731 => [[['_route' => 'admin.playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        757 => [[['_route' => 'admin.playlist.edit', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::edit'], ['id'], null, null, false, true, null]],
        779 => [
            [['_route' => 'admin.playlist.suppr', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
