<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
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
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:57)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:96)'
                    .'|formation/([^/]++)(*:121)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:165)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:205)'
                    .'|playlist/([^/]++)(*:230)'
                .')'
                .'|/admin/(?'
                    .'|categorie/suppr/([^/]++)(*:273)'
                    .'|formation(?'
                        .'|/(?'
                            .'|index/(?'
                                .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:341)'
                                .'|recherche/([^/]++)(?:/([^/]++))?(*:381)'
                            .')'
                            .'|edit/([^/]++)(*:403)'
                        .')'
                        .'|\\.suppr/([^/]++)(*:428)'
                    .')'
                    .'|playlist(?'
                        .'|s/index/(?'
                            .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:494)'
                            .'|recherche/([^/]++)(?:/([^/]++))?(*:534)'
                        .')'
                        .'|/(?'
                            .'|edit/([^/]++)(*:560)'
                            .'|suppr/([^/]++)(*:582)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        96 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        121 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        165 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        205 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        230 => [[['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'admin.categorie.suppr', '_controller' => 'App\\Controller\\admin\\AdminCategorieController::delete'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'admin.formation.sort', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminformationController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        381 => [[['_route' => 'admin.formation.findAllContain', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminformationController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        403 => [[['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\admin\\AdminformationController::edit'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'admin.formation.suppr', '_controller' => 'App\\Controller\\admin\\AdminformationController::delete'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'admin.playlist.sort', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        534 => [[['_route' => 'admin.playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        560 => [[['_route' => 'admin.playlist.edit', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::edit'], ['id'], null, null, false, true, null]],
        582 => [
            [['_route' => 'admin.playlist.suppr', '_controller' => 'App\\Controller\\admin\\AdminplaylistsController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
