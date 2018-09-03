<?php namespace Eriks\GoogleCalendar\Controllers;

use Eriks\GoogleCalendar\Models\Calendar;
use Flash;
use BackendMenu;
use Backend\Classes\Controller;


class Calendars extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Eriks.GoogleCalendar', 'calendar', 'calendars');
    }


    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $itemId) {
                if (!$slider = Calendar::find($itemId))
                    continue;

                $slider->delete();
            }

            Flash::success('Successfully deleted those selected.');
        }

        return $this->listRefresh();
    }


}