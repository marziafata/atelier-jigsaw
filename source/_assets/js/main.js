
var $ = require( "jquery" );

import flatpickr from "flatpickr";

var dayjs = require('dayjs')
// //import dayjs from 'dayjs' // ES 2015
// dayjs().format()

$(document).ready(function() {

    $("#logo-footer").click(function () {
        alert('ciao');
        console.log('ciao');
    });
    console.log('ok');

    var now = dayjs().add(3, 'day').format();
    flatpickr("#calendario", {
        "minDate": now,
        "disable": [
            function(date) {
                // return true to disable
                return (date.getDay() === 0 || isHoliday(date));

            }
        ],
        "locale": {
            "firstDayOfWeek": 1 // start week on Monday
        }
    });


    function isHoliday(data){


        return false;
    };

});
