<?php

return [
    'catalogo' => [ 'submenu' => [
        'lista' =>[ 'title'=> 'Catálogo', 'url' => '/catalog'],
        'nueva' => ['title' => 'Nueva Película', 'url' => '/catalog/create'],
    ]],
    'genero' => ['submenu' => [
        'genre' => ['title' => 'Mantenimiento Generos' , 'url' => '/genre'],
        'nuevo' => ['title' => 'Nuevo Genero', 'url' => '/genre/create']
    ]],
    'logout' => ['title' => 'Cerrar Sesion' ,'url' => '/logout']
];
