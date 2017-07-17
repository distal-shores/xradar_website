$(document).ready(function() {

    $(window).resize(function() {
        if ($(window).width() <= 992){
            if (!$('.two-column').find('span').hasClass('expandable')) {
                $('.two-column').find('span').addClass('expandable');
            } 
            $('span.expandable').expander({
                slicePoint: 0,
                expandPrefix: '',
            });   
        }
        if ($(window).width() > 992) {
            $('span.expandable').removeClass('expandable');
        }
    });
});