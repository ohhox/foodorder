
$(function () {
    $('.removeFood').on('click', function () {
        $obj = $(this);
        if (confirm('ยืนยันการลบ')) {
            $.ajax({
                url: $obj.attr('data-href')
            }).done(function (data) {
                if (data == 'OK') {
                    noti('แจ้งเตือน', 'ลบรายการเมนูอาหารเรียบร้อย');
                    $obj.parent().parent().parent().addClass('animated zoomOutDown');
                    setTimeout(function () {
                        $obj.parent().parent().parent().remove();
                    }, 900);
                }
            });
        }
        event.preventDefault();
    });

    $('#showall').on('click', function () {
        $(this).addClass('active');
        $('#foodfoodList ul li').show();
        $('#foodType ul li').removeClass('active');
    });
    $('#foodType ul li').on('click', function () {
        var classx = 'T' + $(this).attr('data-id');
        var x = '#foodfoodList ul li.' + classx;
        console.log(x);
        $("#foodfoodList ul li").hide();
        $(x).show();
        $('#showall').removeClass('active');
        $('#foodType ul li').removeClass('active');
        $(this).addClass('active');

    });

    $('.tablex').on('click', function () {
        alert('x');
    });
});

function noti(title, body) {

    $("#Noti_title").html('<i class="fa fa-info"></i> ' + title);
    $("#Noti_body").html('<i class="fa fa-info"></i> ' + body);

    $('#Noti').show().addClass('animated slideInRight');
    setTimeout(hidenoti, 3000);
}
function hidenoti() {
    $('#Noti').removeClass('slideInRight');
    $('#Noti').addClass('slideOutRight');
    setTimeout(function () {
        $("#Noti_title").html('');
        $("#Noti_body").html('');
        $('#Noti').removeClass('animated slideOutRight').hide();
    }, 1000)
}
