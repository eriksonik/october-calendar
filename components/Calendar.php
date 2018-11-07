<?php

namespace Eriks\GoogleCalendar\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Eriks\GoogleCalendar\Models\Calendar as CalendarModel;


class Calendar extends ComponentBase {


	public function componentDetails()
	{
		return [
//			'name' => Lang::get('eriks.googlecalendar::lang.plugin.name'),
			'name' => 'eriks.googlecalendar::lang.plugin.name',
//			'description' => Lang::get('eriks.googlecalendar::lang.plugin.description'),
			'description' => 'eriks.googlecalendar::lang.plugin.description',
		];
	}


	public function defineProperties()
	{
		return [
            'idCalendar' => [
                'title' => 'eriks.googlecalendar::lang.componentCalendar.name',
                'type' => 'dropdown',
                'description' => 'eriks.googlecalendar::lang.componentCalendar.description',
            ],
		];
	}


    public function getIdCalendarOptions()
    {
        return (new CalendarModel())::orderBy('name')->lists('name', 'id');
    }


	public function onRun()
	{
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/moment.min.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/fullcalendar.min.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/gcal.min.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/fullcalendar_init.js');
		$this->addCss('/plugins/eriks/googlecalendar/assets/css/fullcalendar.css');
		$this->addCss('/plugins/eriks/googlecalendar/assets/css/gcalendar-custom.css');
	}


	public function onRender()
	{
//		$this->page['api'] = $this->property('api');
//		$this->page['hash'] = $this->property('hash');

//        $ddd = (new CalendarModel())::find($this->property('idCalendar'));
//        dd($ddd);
//        dd($ddd->attributes);

        $this->calendar = $this->page['calendar'] = (new CalendarModel())::find($this->property('idCalendar'));
	}

}