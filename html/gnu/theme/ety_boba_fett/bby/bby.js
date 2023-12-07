$(document).ready(function () {

    

    $(window).on('scroll', function () {

        if ($(window).scrollTop() > 80) {
            $("body").addClass("blackMode");
        }
        else {
            $("body").removeClass("blackMode");

        }

    });

    $("#jh_gnb").on("mouseenter", function () {
        $("body").addClass("blackMode");
    }).on("mouseleave", function () {
        $("body").removeClass("blackMode");
    });


});

