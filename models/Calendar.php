<?php namespace Eriks\GoogleCalendar\Models;

use Model;
use ValidationException;
use Lang;
use Carbon\Carbon;


class Calendar extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'eriks_googlecalendar_calendars';

    protected $primaryKey = 'id';

//    public $implement = ['System.Behaviors.SettingsModel'];

//    public $settingsCode = 'eriks_calendar_settings';
//    public $settingsFields = 'fields.yaml';


    public $rules = [
        'name' => 'required|between:3,64',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:eriks_googlecalendar_calendars'],
    ];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];


//    public $attachMany = [
//        'images' => ['System\Models\File', 'order' => 'sort_order'],
//    ];


    public function afterValidate()
    {
        if ($this->published && !$this->published_at) {
            throw new ValidationException([
                'published_at' => Lang::get('eriks.googlecalendar::lang.exeption.publish_date_validation')
            ]);
        }
    }

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
            ;
    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];
        return $this->url = $controller->pageUrl($pageName, $params);
    }


}