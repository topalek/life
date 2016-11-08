$(function () {
    carouselInit();

    $('.tab').on('hide.bs.tab', function (e) {
        // $('.owl-carousel').trigger('refresh');
        $($(this).attr('href')+' .owl-carousel').trigger('destroy');
        // carouselInit();
    });
    $('.tab').on('shown.bs.tab', function (e) {
        $($(this).attr('href')+' .owl-carousel').owlCarousel({items: 1,loop: true,margin: 10,nav: true,dots: true,navText: ['&nbsp;', '&nbsp;']})

    });

    $('.search_triger,#close-search').click(function () {
        $('.header_search').toggleClass('active');
    })
});
function carouselInit() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        navText: ['&nbsp;', '&nbsp;']
        // navText: ['&#128896;','&#128898;']
    });
}