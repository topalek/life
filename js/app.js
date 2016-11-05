$(function () {
    carouselInit();

    $('.tab').on('shown.bs.tab', function (e) {
        // carouselInit();
        $('.owl-carousel').trigger('refresh.owl.carousel');

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