<?php namespace Lealka\Til;

use Backend;
use System\Classes\PluginBase;

/**
 * Til Plugin Information File
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
            'name'        => 'Til',
            'description' => 'The Today I Learned plugin for team',
            'author'      => 'Al-Ka Le',
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
            'Lealka\Til\Components\MyComponent' => 'myComponent',
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
            'lealka.til.some_permission' => [
                'tab' => 'Til',
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
        return []; // Remove this line to activate

        return [
            'til' => [
                'label'       => 'Til',
                'url'         => Backend::url('lealka/til/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lealka.til.*'],
                'order'       => 500,
            ],
        ];
    }
}
