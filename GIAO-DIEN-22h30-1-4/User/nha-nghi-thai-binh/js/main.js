
$(document).ready(function () {
    
        $(".n2").click(function () {
            $('html, body').animate({
                scrollTop: $("#double-room").offset().top - 100
            });
        });
        $(".n1").click(function () {
            $('html, body').animate({
                scrollTop: $("#single-room").offset().top - 100
            });
        });

    });

/*====================Menu Slidebar mobie===========*/
$('li.child-menu').click(function () {
    $('.content-menu').toggleClass('show');
})






    


