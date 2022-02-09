/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/original.js ***!
  \**********************************/
$(function () {
  $(document).on("click blur", "#botton1", function () {
    $('#Sector').text('「重要」で「緊急」なもの');
    $('#is_Sector').text(1);
  });
  $(document).on("click blur", "#botton2", function () {
    $('#Sector').text('「重要」だけど「緊急」でないもの');
    $('#is_Sector').text(2);
  });
  $(document).on("click blur", "#botton3", function () {
    $('#Sector').text('「重要」ではないが「緊急」なもの');
    $('#is_Sector').text(3);
  });
  $(document).on("click blur", "#botton4", function () {
    $('#Sector').text('「重要」でもないが「緊急」でもないもの');
    $('#is_Sector').text(4);
  });
});
$(window).on('load resize', function () {
  if ($(window).width() < 768) {
    $('.explanation1').html('「重要」で<br>「緊急」なもの');
    $('.explanation2').html('「重要」だけど<br>「緊急」でないもの');
    $('.explanation3').html('「重要」ではないが<br>「緊急」なもの');
    $('.explanation4').html('「重要」でもないが<br>「緊急」でもないもの');
    $('#botton1').width($('#botton3').width());
    $('#botton2').width($('#botton4').width());
  }
});
$(document).on("click blur", "#list", function () {
  if ($(window).width() < 768) {
    var wait = function wait(sec) {
      var objDef = new $.Deferred();
      setTimeout(function () {
        objDef.resolve(sec);
      }, sec * 250);
      return objDef.promise();
    };

    ;
    console.log('wait 5sec right now!');
    wait(3).done(function () {
      console.log('5sec spaned!');
      $('.contents').remove();
      mini();
    });
  }
});

function mini() {
  var sectors = $('.sector');
  $.each(sectors, function (index, sector) {
    switch ($(sector).text()) {
      case '「重要」で「緊急」なもの':
        $(sector).html("<img class='w-10 container mx-auto' src='https://res.cloudinary.com/danj8nvfr/image/upload/v1643447997/tasks/travel_holiday_vacation_3-28.svg'>");
        $(sector).addClass('bg-red-500');
        break;

      case '「重要」だけど「緊急」でないもの':
        $(sector).html("<img class='w-10 container mx-auto' src='https://res.cloudinary.com/danj8nvfr/image/upload/v1643447997/tasks/travel_holiday_vacation_3-01.svg'>");
        $(sector).addClass('bg-yellow-300');
        break;

      case '「重要」ではないが「緊急」なもの':
        $(sector).html("<img class='w-10 container mx-auto' src='https://res.cloudinary.com/danj8nvfr/image/upload/v1643447997/tasks/travel_holiday_vacation_3-03.svg'>");
        $(sector).addClass('bg-lime-400');
        break;

      case '「重要」でもないが「緊急」でもないもの':
        $(sector).html("<img class='w-10 container mx-auto' src='https://res.cloudinary.com/danj8nvfr/image/upload/v1643447998/tasks/travel_holiday_vacation_3-04.svg'>");
        $(sector).addClass('bg-blue-400');
        break;

      default:
    }
  });
}
/******/ })()
;