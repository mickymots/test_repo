$( document ).ready(function() {
    console.log( "ready!" );
});

function showSuccess() {
    $('#flexiContactForm').slideUp("fast");
    $('#success-message').slideDown( "fast" );
}

$('.nav-icon').click(function(){
    $(this).toggleClass('open');
});

// NAVBAR SCROLL
$(function () {
    var scrollPos = 0;
    var $nav = $('.navbar.fixed-top');
    if ($nav.hasClass('navbar-dark')) 
    $(document).scroll(function () { 
        if ($(this).scrollTop() > $nav.height()) {
            $nav.removeClass('navbar-dark').addClass('navbar-light');
        } 
        if ($(this).scrollTop() < $nav.height())  {
            $nav.removeClass('navbar-light').addClass('navbar-dark');
        }

        if ((document.body.getBoundingClientRect()).top > scrollPos)
            $nav.removeClass('navbar-offset');
        else
            $nav.addClass('navbar-offset');
        scrollPos = (document.body.getBoundingClientRect()).top
    });
});