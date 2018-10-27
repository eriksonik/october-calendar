# october-calendar
Google Calendar for October CMS


»нтегрируем Google-календарь в собственный веб-сайт - http://www.coolwebmasters.com/tutorials/2597-integrating-google-calendar-with-your-website.html

http://www.lindenlan.net/2007/06/18/restyle-google-calendar-gadget/
https://www.ibm.com/developerworks/ru/library/os-php-xpath/index.html


ѕосле неудачных попыток осилить Google Calendar API начал исследовать парсинг iframe.
ќднако не все так гладко. ќсновной шероховатостью стало большое количество кода дл€ парсинга.
–азумеетс€ можно выдрать кусок из iframe и поместить его в свой шаблон, а затем поигратьс€ с CSS,
но из€щество в простоте - решено искать далее.

—ледующими объектами поиска стали PHP-библиотеки на GitHub. Ѕыло просмотрено 5 библиотек из которых
2 удостоились тестов. ѕосле тестов выбор пал на SG-iCalendar (https://github.com/fangel/SG-iCalendar).
Ќа демо-странице данна€ библиотека отображала календарь на п€терочку, но внедренна€ в компонент верси€
отказывалать отображать данные. ¬ы€снив, что эта библиотека использует стороннюю js-библиотеку
FullCalendar (https://fullcalendar.io/) € начал изучать ее.

–езультат - чудесный календарь на FullCalendar'е.