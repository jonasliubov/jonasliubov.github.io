$( document ).ready( function () {

    // For all day startTime = date (20201010 - year,month,day), endTime(20201011 - year,month,day + 1)
    document.getElementById('link-google').href = encodeURI(['https://www.google.com/calendar/render',
        '?action=TEMPLATE',
        '&text=' + ('Jonas And Liubov Wedding.'),
        '&dates=' + ('20211010' || ''), // startTime
        '/' + ('20211011' || ''), // endTime
        '&details=' + ('WEDDING PARTY'),
        '&location=' + ('Merelbekestraat 99, 9090 Melle, Belgium'),
        '&sprop=&sprop=name:'].join(''));

    var hrefA = encodeURI('data:text/calendar;charset=utf8,' + [
        'BEGIN:VCALENDAR',
        'VERSION:2.0',
        'BEGIN:VEVENT',
        'URL:' + document.URL,
        'DTSTART:' + ('20211010' || ''),  // startTime
        'DTEND:' + ('20211011' || ''), // endTime
        'SUMMARY:' + ('Jonas And Liubov Wedding.'),
        'DESCRIPTION:' + ('WEDDING PARTY'),
        'LOCATION:' + ('Merelbekestraat 99, 9090 Melle, Belgium'),
        'END:VEVENT',
        'END:VCALENDAR'].join('\n'));
    document.getElementById('link-apple').href = hrefA;
});