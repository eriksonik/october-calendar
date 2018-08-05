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
        displayEventTime: false, // don't show the time column in list view
        googleCalendarApiKey: googleCalendarApi,
        events: googleCalendarHash + '@group.calendar.google.com',
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
            // Добавление класса для раскрашивания фона текста собития выходного дня.
            $('.fc-content > span').each(function () {
                if ($(this).text() === 'Day Off') {
                    $(this).parent().addClass('ed-sun');
                }
            });
        }
    };

    $('#calendar').fullCalendar(opt);

});
