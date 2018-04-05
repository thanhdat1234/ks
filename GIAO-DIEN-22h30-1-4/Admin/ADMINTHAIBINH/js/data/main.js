$(document).ready(function () {

    $(".testInput").autoNumeric('init', {
        aSep: '.',
        aDec: ',',
        aForm: true,
        vMax: '999999999',
        vMin: '-999999999'
    });
});


function Hideimage() {

    $('#load').show();
    $('.modal-dialog').css("display", "none");

    setTimeout(function () {
        $('#load').hide();
    }, 700);

    setTimeout(function () {
        $('.modal-dialog').css("display", "inline-block");
    }, 800);
}
