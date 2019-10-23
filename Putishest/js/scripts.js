$('document').ready(function () {
    /*$('.trigger').click(function () {
        $('.side-pannel').toggle('fast');
        $(this).toggleClass('active');
        return false;
    });*/

    $('.kalkul').click(function(){
        $('.kalik').css("display", "block");
        $('.bg_kalik').fadeIn();
        $('.bg_kalik').click(function () {
            $('.kalik').css("display", "none");
            $('.bg_kalik').fadeOut();
        });
    });

    $('.raschitat').click(function () {
        var a = 0.0;
        if ($(".city").val() === "Ankara") {
            a = parseInt($(".days").val());
            a = 93280 / 7 * a;
        }
        else if ($(".city").val() === "Paris") {
            a = parseInt($(".days").val());
            a = 67659 / 7 * a;
        }
        else if ($(".city").val() === "Vienna") {
            a = parseInt($(".days").val());
            a = 126516 / 7 * a;
        }
        else if ($(".city").val() === "Halkidiki") {
            a = parseInt($(".days").val());
            a = 80401 / 7 * a;
        }
        else if ($(".city").val() === "Madrid") {
            a = parseInt($(".days").val());
            a = 55479 / 7 * a;
        };
        a = Math.round(a, 0);
        alert("Ваша стоимость = " + (a) + " рублей.");
    });
    $('.sslk_obrez').hover(function () {
        $('.sslk_obrez').css("display", "none");
        $('.sslk_full').css("display", "block");
        $('.bg_kalik').fadeIn();
        $('.bg_kalik').hover(function () {
            $('.sslk_full').css("display", "none");
            $('.sslk_obrez').css("display", "block");
            $('.bg_kalik').fadeOut();
        });
    });
    $('.sslk_full').click(function () {
        var url = "\page3.html";
        $(location).attr('href', url);
    });
});
