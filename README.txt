Интегрируем Google-календарь в собственный веб-сайт - http://www.coolwebmasters.com/tutorials/2597-integrating-google-calendar-with-your-website.html

http://www.lindenlan.net/2007/06/18/restyle-google-calendar-gadget/
https://www.ibm.com/developerworks/ru/library/os-php-xpath/index.html

После неудачных попыток осилить Google Calendar API начал исследовать парсинг iframe.
Однако не все так гладко. Основной шероховатостью стало большое количество кода для парсинга.
Разумеется можно выдрать кусок из iframe и поместить его в свой шаблон, а затем поиграться с CSS,
но изящество в простоте - решено искать далее.

Следующими объектами поиска стали PHP-библиотеки на GitHub. Было просмотрено 5 библиотек из которых
2 удостоились тестов. После тестов выбор пал на SG-iCalendar (https://github.com/fangel/SG-iCalendar).
На демо-странице данная библиотека отображала календарь на пятерочку, но внедренная в компонент версия
отказывалать отображать данные. Выяснив, что эта библиотека использует стороннюю js-библиотеку
FullCalendar (https://fullcalendar.io/) я начал изучать ее.

Результат - чудесный календарь на FullCalendar'е.

========================

Подключение:
googleCalendarApiKey: 'AIzaSyDvO7jAHxaTT2AYnCLJvgt95FCeSxclCoo';
opt.events: '61vq08irnnfte12n1rtl0dsmuc@group.calendar.google.com'; // school
opt.events: 'ohpgd5nukc9ap0v50h3pvg0ev0@group.calendar.google.com'; // academy









