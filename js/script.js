$( document ).ready(function() {
    //
	$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 50) {
        $('nav').addClass('fixed');
        $('.wrapper section').each(function(i) {
            if ($(this).position().top <= windscroll - 50) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });

    } else {

        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

})
});

// site preloader -- also uncomment the div in the header and the css style for #preloader
jQuery(document).ready(function($) {
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});
