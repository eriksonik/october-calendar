<?php

return [
    'plugin' => [
        'name' => 'GoogleCalendar',
        'description' => 'GoogleCalendar via FullCalendar.',
    ],
    'permissions' => [
        'all' => 'Manage Google Calendars',
    ],
    'misc' => [
        'newcalendar' => 'New Calendar',
        'sure' => 'Are you sure?',
        'remove' => 'Remove',
    ],
    'form' => [
        'create' => 'Create Calendar',
        'update' => 'Update Calendar',
        'preview' => 'Preview Calendar',
        'manage' => 'Manage Calendar'
    ],
    'menu' => [
        'name' => 'GoogleCalendar',
        'description' => 'Create Google Calendars.',
        'new_calendar' => 'New Calendar',
        'calendars'  => 'Calendars',
    ],
    'modeldata' => [
        'name' => 'Name',
        'created' => 'Created',
        'updated' => 'Updated',
        'images' => 'Images',
        'slug' => 'Slug',
        'description' => 'Description',
        'published' => 'Published',
        'published_at' => 'Published at',
        'slug_placeholder' => 'Enter slug',
        'name_placeholder' => 'Enter name',
        'description_placeholder' => 'Enter Description',
        'key' => 'API Key',
        'key_placeholder' => 'Enter API key',
        'events' => 'Events',
        'events_placeholder' => 'Enter events',
    ],
    'exeption' => [
        'publish_date_validation' => "Must specify a date"
    ],
    'tabs' => [
        'info' => 'Info',
        'settings' => 'Settings'
    ],
    'idcalendar' => [
        'title' => 'Calendar',
        'description' => 'Choose the calendar that will display'
    ],
    'create' => [
        'calendars' => 'Calendars',
        'creating' => 'Creating Calendar...',
        'create' => 'Create',
        'createclose' => 'Create and Close',
        'cancel' => 'Cancel',
        'or' => 'or',
        'return' => 'Return to calendars list'
    ],
    'update' => [
        'saving' => 'Saving Calendar...',
        'save' => 'Save',
        'saveclose' => 'Save and Close',
        'deleting' => 'Deleting Calendar...',
        'reallydelete' => 'Do you really want to delete this Calendar?'
    ],

    'componentCalendar' => [
        'name' => 'Calendar',
        'description' => 'Select Calendar.',
    ],
];
