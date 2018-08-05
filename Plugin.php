<?php

namespace Eriks\GoogleCalendar;

use Backend;
use System\Classes\PluginBase;

/**
 * GoogleCalendar Plugin Information File
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
            'name'        => 'GoogleCalendar',
            'description' => 'GoogleCalendar via FullCalendar.',
            'author'      => 'eriks',
            'icon'        => 'icon-calendar'
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
        return [
            'Eriks\GoogleCalendar\Components\Calendar' => 'calendar',
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
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

//        return [
//            'videoplayer' => [
//                'label'       => 'videoplayer',
//                'url'         => Backend::url('eriks/videoplayer/mycontroller'),
//                'icon'        => 'icon-leaf',
//                'permissions' => ['eriks.videoplayer.*'],
//                'order'       => 500,
//            ],
//        ];
    }

}
