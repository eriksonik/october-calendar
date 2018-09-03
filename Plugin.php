<?php namespace Eriks\GoogleCalendar;

use App;
use Event;
use Backend;
use System\Classes\PluginBase;
use BackendMenu;

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
            'name'        => 'eriks.googlecalendar::lang.plugin.name',
            'description' => 'eriks.googlecalendar::lang.plugin.description',
            'author'      => 'eriks',
            'icon'        => 'icon-calendar'
        ];
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
        return [
            'eriks.googlecalendar.*' => [
                'tab' => 'eriks.googlecalendar::lang.plugin.name',
                'label' => 'eriks.googlecalendar::lang.permissions.all'
            ]
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
            'calendar' => [
                'label'       => 'eriks.googlecalendar::lang.menu.name',
                'url'         => Backend::url('eriks/googlecalendar/calendars'),
                'icon'        => 'icon-calendar',
                'permissions' => ['eriks.googlecalendar.*'],
                'order'       => 500,

                'sideMenu' => [
                    'calendars' => [
                        'label'       => 'eriks.googlecalendar::lang.menu.calendars',
                        'icon'        => 'icon-file-image-o',
                        'url'         => Backend::url('eriks/googlecalendar/calendars'),
                        'permissions' => ['eriks.googlecalendar.*']
                    ],
                    'new_calendar' => [
                        'label'       => 'eriks.googlecalendar::lang.menu.new_calendar',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('eriks/googlecalendar/calendars/create'),
                        'permissions' => ['eriks.googlecalendar.*']
                    ],
                ],

            ],
        ];
    }

}
