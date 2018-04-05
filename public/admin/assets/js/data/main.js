$(document).ready(function () {

    /*$(".testInput").autoNumeric('init', {
        aSep: '.',
        aDec: ',',
        aForm: true,
        vMax: '999999999',
        vMin: '-999999999'
    });*/
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



    function uploadFile(e,obj) {
        //obj:parent .on | obj.child | obj link
        //obj = {'parent':'a[type="button"]','child':"input[name='myfile']",'link':'test'};
        $(obj.parent).on('click', function (e) {
            e.preventDefault();
            $(obj.child).click();
        });

        $(obj.child).change(function () {
            var file = $(this).prop('files')[0];
            var formdata = new FormData();
            formdata.append("image", file);
            formdata.append("_token", obj.token);

            $.ajax({
                url: obj.link,
                data: formdata,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    console.log(data);
                    if (data.code == 1) {
                        window.location.reload();
                    } else {
                        $('.info-triggle').click();
                    }
                }
            });
        });
    }





