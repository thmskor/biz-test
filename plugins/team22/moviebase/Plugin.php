<?php namespace Team22\MovieBase;

use Backend;
use System\Classes\PluginBase;

/**
 * MovieBase Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'MovieBase',
            'description' => 'Movies Base',
            'author'      => 'Team22',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Team22\MovieBase\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'team22.moviebase.some_permission' => [
                'tab' => 'MovieBase',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'moviebase' => [
                'label'       => 'MovieBase',
                'url'         => Backend::url('team22/moviebase/movies'),
                'icon'        => 'icon-leaf',
                'permissions' => ['team22.moviebase.*'],
                'order'       => 500,
                'sideMenu' => [
                    'movies' => [
                        'label'       => 'Фильмы',
                        'url'         => Backend::url('team22/moviebase/movies'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['team22.moviebase.*'],
                        'order'       => 500,
                    ],
                    'genres' => [
                        'label'       => 'Жанры',
                        'url'         => Backend::url('team22/moviebase/genres'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['team22.moviebase.*'],
                        'order'       => 500,
                    ],
                    'actors' => [
                        'label'       => 'Актеры',
                        'url'         => Backend::url('team22/moviebase/actors'),
                        'icon'        => 'icon-human',
                        'permissions' => ['team22.moviebase.*'],
                        'order'       => 500,
                    ]
                ]
            ]
        ];
    }
}
