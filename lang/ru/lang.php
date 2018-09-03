<?php

return [
    'plugin' => [
        'name' => 'GoogleCalendar',
        'description' => 'GoogleCalendar с использованием FullCalendar.',
    ],
    'permissions' => [
        'all' => 'Управлять календарями.',
    ],
    'misc' => [
        'newcalendar' => 'Новый календарь',
        'sure' => 'Подтвердите свои намерения',
        'remove' => 'Удалить',
    ],
    'form' => [
        'create' => 'Создать календарь',
        'update' => 'Обновить календарь',
        'preview' => 'Предпросмотр календаря',
        'manage' => 'Управление календарями'
    ],
    'menu' => [
        'name' => 'GoogleCalendar',
        'description' => 'Установка Google-календарей.',
        'new_calendar' => 'Новый календарь',
        'calendars'  => 'Календари',
    ],
    'modeldata' => [
        'name' => 'Название',
        'created' => 'Создан',
        'updated' => 'Обновлен',
        'images' => 'Изображения',
        'slug' => 'Slug',
        'description' => 'Описание',
        'published' => 'Опубликован',
        'published_at' => 'Опубликовано в',
        'slug_placeholder' => 'Введите slug',
        'name_placeholder' => 'Введите название',
        'description_placeholder' => 'Введите описание',
        'key' => 'API Key',
        'key_placeholder' => 'Введите ключ API',
        'events' => 'Events',
        'events_placeholder' => 'Введите events',
    ],
    'exeption' => [
        'publish_date_validation' => "Must specify a date"
    ],
    'tabs' => [
        'info' => 'Информация',
        'settings' => 'Настройки'
    ],
    'idcalendar' => [
        'title' => 'Календарь',
        'description' => 'Выберите календарь, который будет отображаться.'
    ],
    'create' => [
        'calendars' => 'Календари',
        'creating' => 'Создать календарь...',
        'create' => 'Создать',
        'createclose' => 'Создать и закрыть',
        'cancel' => 'Отмена',
        'or' => 'или',
        'return' => 'Вернуться к списку календарей'
    ],
    'update' => [
        'saving' => 'Сохранение календаря...',
        'save' => 'Сохранить',
        'saveclose' => 'Сохранить и выйти',
        'deleting' => 'Уделаение календаря...',
        'reallydelete' => 'Вы и в правду хотите удалить календарь?'
    ],

    'componentCalendar' => [
        'name' => 'Календарь',
        'description' => 'Выбор календаря из установленных.',
    ],
];
