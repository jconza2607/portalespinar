<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'menu' => [[
		'icon' => 'fa fa-sitemap',
		'title' => 'Dashboard',
		'url' => '/',
		'route-name' => 'dashboard',
		'permission' => null,
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Mantenimiento',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'permissions',
			'title' => 'Roles',
			'route-name' => 'permissions.index',
			'permission' => 'administrar permisos',
		],[
			'url' => 'users',
			'title' => 'Usuario',
			'route-name' => 'users.index',
			'permission' => 'administrar permisos',
		]]
	]]
];
