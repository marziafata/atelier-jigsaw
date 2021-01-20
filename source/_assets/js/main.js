
var $ = require( "jquery" );

import flatpickr from "flatpickr";

var dayjs = require('dayjs')
// //import dayjs from 'dayjs' // ES 2015
// dayjs().format()
var maxTop = 0

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

    //animazione menu on scroll
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        $('header').toggleClass('nascondi', $(window).scrollTop() > maxTop);
        maxTop = $(window).scrollTop();
    });
    //  // var position = $(window).scrollTop(); //provare a mettere 0
    //  var positione = 0;
    //
    // $(window).scroll(function() {
    //     // var scroll = $(window).scrollTop();
    //     // console.log('scroll: ');
    //     // console.log(scroll);
    //     if ($(window).scrollTop() > 96) {
    //         $('header div.navbar').addClass('sfondo');
    //         $('header div.menu-mobile').addClass('sfondo');
    //     } else {
    //         $('header div.navbar').removeClass('sfondo');
    //         $('header div.menu-mobile').removeClass('sfondo');
    //     }
    //
    //     // $('header div.navbar').toggleClass('nascondi', $(window).scrollTop() > maxTop);
    //     // maxTop = $(window).scrollTop();
    //
    //     // metodo infinity
    //   var scroll = $(window).scrollTop();
    //   console.log('scroll: ');
    //   console.log(scroll);
    //   console.log('position: ');
    //   console.log(positione);
    //   if(scroll > positione) {
    //     // Scroll down
    //     $('header div.navbar').addClass('nascondi');
    //     $('header div.menu-mobile').addClass('nascondi');
    //     // if($(window).width()>=1024) {
    //     //   $('header').removeClass('scroll-menu-visible');
    //     //   $('header div').removeClass('sfondo');
    //     //   $('header').addClass('scroll-menu-hidden');
    //     // }
    //   } else {
    //     // Scroll up
    //     console.log('scroll up');
    //     $('header div.navbar').removeClass('nascondi');
    //     $('header div.menu-mobile').removeClass('nascondi');
    //     // if($(window).width()>=1024) {
    //     //   $('header').addClass('scroll-menu-visible');
    //     //   $('header div').addClass('sfondo');
    //     // }
    //   }
    //   positione = scroll;
    //   console.log('position2: ');
    //   console.log(positione);
    //   if (positione = 0) {
    //       // $('header div').removeClass('sfondo');
    //   }
    // });
});
