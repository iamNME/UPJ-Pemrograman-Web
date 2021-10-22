/*jslint browser: true*/
/*global $, console, window*/

$(document).ready(function () {
    'use strict';

    var win = $(window),
        navbar = $('.navbar'),
        scrollUp = $(".scroll-up");
    

    
    
    /*========== Start Navbar Auto Change  ==========*/
    win.on('scroll', function () {
        if (win.scrollTop() > 50) {
            navbar.addClass('nav-fixed').removeClass('fixed-top');
        } else {
            navbar.addClass('fixed-top').removeClass('nav-fixed');
        }
    });
    
    
    // Sync Navbar Links With Section
    $('body').scrollspy({
        target: '#navtoggler',
        offset: 82
    });
    //// COLLAPSED MENU CLOSE ON CLICK
    navbar.on('click', '.navbar-collapse', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });
    
    
    
    function animateProgressBar() {
        $('.skill-box .progress-line > span').each(function () {
            var percent = $(this).data('percent');
            $(this).css({
                width: percent + '%',
                transition: 'width 1.5s linear'
            });
        });
    }

    $(window).on('scroll', function () {
        if ($(this).scrollTop() >= 200) {
            animateProgressBar();
        }
    });
    
    
    


    /*========== Start Scroll Up    ==========*/
    // Show And Hide Buttom Back To Top
    win.on('scroll', function () {
        if ($(this).scrollTop() >= 600) {
            scrollUp.show(800);
        } else {
            scrollUp.hide(300);
        }
    });
    // Back To 0 Scroll Top body
    scrollUp.on('click', function () {
        $("html, body").animate({ scrollTop: 0}, 1000);
    });
  


});