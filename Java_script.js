$(document).ready(function() {  
    $(window).on('scroll', function() {
     if($(window).scrollTop() < 1000) {
       $('.titre_header').css('background-size', 100 + parseInt($(window).scrollTop() / 5) + '%');
       $('.titre_header h1').css('top', 10 + ($(window).scrollTop() * .1) + '%');
       $('.titre_header h1').css('opacity', 1 - ($(window).scrollTop() * .003));
     }
      
      if($(window).scrollTop() >= $('.container-fluid').offset().top - 300) {
        $('.nav-bg').removeClass('bg-hidden');
        $('.nav-bg').addClass('bg-visible');
        $('#nav').addClass('ul li:hover ul li');
      } else {
        $('.nav-bg').removeClass('bg-visible');
        $('#nav').removeClass('ul li:hover ul li');
        $('.nav-bg').addClass('bg-hidden');
      }
   });
 });