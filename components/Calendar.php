<?php

namespace Eriks\GoogleCalendar\Components;

use Cms\Classes\ComponentBase;


class Calendar extends ComponentBase {

	public $calendar;

	public function componentDetails()
	{
		return [
			'name' => 'GoogleCalendar',
			'description' => 'Display google-calendar on the pages of your site.'
		];
	}

	public function defineProperties()
	{
		return [
			'api' => [
				'title' => 'API key',
				'type' => 'string',
			],
			'hash' => [
				'title' => 'hash',
				'type' => 'string',
				'description' => 'hash@group.calendar.google.com',
			],
		];
	}


	public function onRun()
	{
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/moment.min.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/fullcalendar.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/gcal.js');
		$this->addJs('/plugins/eriks/googlecalendar/assets/js/fullcalendar_init.js');
		$this->addCss('/plugins/eriks/googlecalendar/assets/css/fullcalendar.css');
		$this->addCss('/plugins/eriks/googlecalendar/assets/css/gcalendar-custom.css');
	}


	public function onRender()
	{
		$this->page['api'] = $this->property('api');
		$this->page['hash'] = $this->property('hash');
	}

}