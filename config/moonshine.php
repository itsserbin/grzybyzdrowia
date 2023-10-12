<?php

use MoonShine\Exceptions\MoonShineNotFoundException;
use MoonShine\Models\MoonshineUser;

return [
    'dir' => 'app/MoonShine',
    'namespace' => 'App\MoonShine',
    'disk' => env('MOONSHINE_DISK', 'public'),

    'title' => env('MOONSHINE_TITLE', 'GRZYBY'),
    'logo' => env('MOONSHINE_LOGO','/storage/logo.png'),
    'logo_small' => env('MOONSHINE_LOGO_SMALL','/storage/logo.png'),

    'route' => [
        'prefix' => env('MOONSHINE_ROUTE_PREFIX', 'admin'),
        'index_route' => env('MOONSHINE_INDEX_ROUTE', 'moonshine.index'),
        'middleware' => ['moonshine'],
        'custom_page_slug' => 'custom_page',
        'notFoundHandler' => MoonShineNotFoundException::class,
    ],
    'use_migrations' => true,
    'use_notifications' => true,
    'auth' => [
        'enable' => true,
        'fields' => [
            'username' => 'email',
            'password' => 'password',
            'name' => 'name',
            'avatar' => 'avatar',
        ],
        'guard' => 'moonshine',
        'guards' => [
            'moonshine' => [
                'driver' => 'session',
                'provider' => 'moonshine',
            ],
        ],
        'providers' => [
            'moonshine' => [
                'driver' => 'eloquent',
                'model' => MoonshineUser::class,
            ],
        ],
        'footer' => '',
    ],
    'locales' => [
        'en',
        'ru',
    ],
    'middlewares' => [],
    'tinymce' => [
        'file_manager' => false, // or 'laravel-filemanager' prefix for lfm
        'token' => env('MOONSHINE_TINYMCE_TOKEN', ''),
        'version' => env('MOONSHINE_TINYMCE_VERSION', '6'),
    ],
    'socialite' => [
        // 'driver' => 'path_to_image_for_button'
    ],
    'header' => null, // blade path
    'footer' => [
        'nav' => [

        ],
    ],
];
