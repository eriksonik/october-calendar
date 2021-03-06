$(document).ready(function () {

    // var view = $('#calendar').fullCalendar('getView');
    // console.log("The view's title is " + view.title);

    var opt = {
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,listYear'
        },
        firstDay: 1,
        displayEventTime: true, // don't show the time column in list view
        googleCalendarApiKey: googleCalendarApi,
        // events: googleCalendarEvents + '@group.calendar.google.com',
        // events: googleCalendarEvents,
        // events: {
        //     googleCalendarId: '61vq08irnnfte12n1rtl0dsmuc@group.calendar.google.com',
        // },
        eventSources: [
            {
                googleCalendarId: '61vq08irnnfte12n1rtl0dsmuc@group.calendar.google.com',
                className: 'school-event'
            },
            {
                googleCalendarId: 'ohpgd5nukc9ap0v50h3pvg0ev0@group.calendar.google.com',
                className: 'academy-event'
            }
        ],
        eventColor: true,
        eventClick: function (event) {
            // opens events in a popup window
            window.open(event.url, 'gcalevent', 'width=700,height=600');
            return false;
        },
        loading: function (bool) {
            $('#loading').toggle(bool);
        },
        eventAfterAllRender: function (view) {
            // Добавление класса для раскрашивания фона текста события выходного дня.
            $('.fc-content > span').each(function () {
                if ($(this).text() === 'Day Off') {
                    $(this).parent().addClass('ed-sun');
                }
            });
        }
    };

    $('#calendar').fullCalendar(opt);

});
