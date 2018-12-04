$(function() {
    //sticky menu---------------
    var menuOffset = $('.nav-sticky').offset();
    $(document).on('scroll', function() {

        var iScrollTop = $(document).scrollTop();
        if (iScrollTop > menuOffset.top-200) {
            //fix it
            $('.navbar').addClass('fixed');

        } else {
            //unfix it
            $('.navbar').removeClass('fixed');
        }

    });



});


$(document).ready(function(){
  // Start mixitup
  $('#portfoliolist').mixItUp();
});
