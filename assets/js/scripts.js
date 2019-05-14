$(window).on('scroll', function() {
    console.log('They see me scrolling')
    var scroll = $(window).scrollTop();
    if (scroll >= 30) {
        $(".navbar").addClass("nav-strict");
    } else {
        $(".navbar").removeClass("nav-strict");
    }
});

