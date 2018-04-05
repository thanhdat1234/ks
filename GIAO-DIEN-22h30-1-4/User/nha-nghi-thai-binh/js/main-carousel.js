
$(function () {
    // slider for slider đầu.
    $('#owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1,    
        autoPlay:true,
        navigation: true,
        navigationText: ["<img src='img/icon-left.png'>","<img src='img/icon-right.png'>"],
        items: 1,
           itemsDesktop: [1000, 1],
           itemsDesktopSmall: [900, 1],
           itemsTablet: [600, 1],
           itemsMobile: false,
           pagination:false       
    });

});
