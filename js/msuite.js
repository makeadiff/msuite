$(document).on('click', 'a[href^="#"]', function (e) {
    e.preventDefault();
    $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top-70
    }, 500, 'linear');
});


// var sidebar = $('.sidebar');
// console.log(sidebar);
