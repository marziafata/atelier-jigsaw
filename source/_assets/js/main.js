
var $ = require( "jquery" );

import flatpickr from "flatpickr";
import { Italian } from "flatpickr/dist/l10n/it.js"

var dayjs = require('dayjs')
// //import dayjs from 'dayjs' // ES 2015
// dayjs().format()

$(document).ready(function() {

    $("#logo-footer").click(function () {
        alert('ciao');
        console.log('ciao');
    });
    console.log('ok');
    //calendario
    var now = dayjs().add(3, 'day').format();
    flatpickr("#calendario", {
        "minDate": now,
        "enableTime": true,
        "dateFormat": "d/m/Y H:i",
        "disable": [
            function(date) {
                // return true to disable
                return (date.getDay() === 0 || isHoliday(date));

            }
        ],
        "locale": {
            "firstDayOfWeek": 1 // start week on Monday

        },
        "locale": Italian // locale for this instance only

    });


    function isHoliday(data){
        var festivita = [
            "01/01",
            "06/01",
            "05/04", //pasquetta
            "25/04",
            "01/05",
            "02/06",
            "15/08",
            "01/11",
            "08/12",
            "25/12",
            "26/12"
        ];
        console.log(festivita);
        console.log(typeof data);
        var giorno = aggiungiZero(data.getDate());
        var mese = aggiungiZero(data.getMonth()+1);
        var oggi = giorno + "/" + mese;

        if (festivita.includes(oggi)) {
            return true;
        } else {
            return false;
        }
    }

    function aggiungiZero(n) {
        if (n < 10) {
            return "0" + n;
        } else {
            return n;
        }
    }

    var posizione = 0;
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var navHeight = $('header').outerHeight();
        if (scrolled > posizione && scrolled > navHeight) {
            $('header').addClass('animate');
            $('header').removeClass('sfondo');
        } else if (scrolled < posizione && scrolled > navHeight){
            $('header').removeClass('animate');
            $('header').addClass('sfondo');
        } else if (scrolled < navHeight) {
            $('header').removeClass('animate');
            $('header').removeClass('sfondo');
        }
        posizione = scrolled;
    });
});
