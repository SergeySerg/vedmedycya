$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Sliders start
$('.rest-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    fade: true,
    prevArrow: '.left-click',
    nextArrow: '.right-click',
    speed: 2000,
    dots: true,
    appendDots: $('.rest-dots'),
    dotsClass: 'custom-dots',
    customPaging: function (slider, i) {
        return '<a class="dot" role="button"></a>';
    }
});

$('.slider-class').slick({
    infinite: true,
    prevArrow: '#p-arrow',
    nextArrow: '#n-arrow',
    speed: 1000,
    dots: true,
    appendDots: $('.main-dots'),
    dotsClass: 'custom-dots',
    customPaging: function (slider, i) {
        return '<a class="dot" role="button"></a>';
    }
});

$('.feedback-slider').slick({
    infinite: true,
    prevArrow: '#feedback-arrow-left',
    nextArrow: '#feedback-arrow-right',
    adaptiveHeight: true,
    speed: 1000
});

if ($(window).width() > 1199) {
    $('.slider-class-2').slick({
        infinite: true,
        prevArrow: '#p-arrow',
        nextArrow: '#n-arrow',
        speed: 1000,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true, 
        dots: true,
        appendDots: $('.main-dots-2'),
        dotsClass: 'custom-dots',
        customPaging: function (slider, i) {
            return '<a class="dot" role="button"></a>';
        }
    });

    $(".slider-class-2").find(".slick-slide").width(60 + "vw");
    $(".slider-class-2").find(".slick-slide").css({
        "padding-left": "8px",
        "padding-right": "8px"
    });
} else {
    $('.slider-class-2').slick({
        infinite: true,
        prevArrow: '#p-arrow',
        nextArrow: '#n-arrow',
        speed: 1000,
        slidesToShow: 1,
        dots: true,
        appendDots: $('.main-dots-2'),
        dotsClass: 'custom-dots',
        customPaging: function (slider, i) {
            return '<a class="dot" role="button"></a>';
        }
    });

    $(".slider-class-2").find(".slick-slide").height(60 + "vh");
    $(".slider-class-2").find(".slick-slide").height($(".slider-class-2").find(".slick-slide").height() + 52);
    $(".slider-class-2").find(".slick-slide").css("padding", "0px");
}

$(".apart-image-slider").slick({
    infinite: true,
    prevArrow: '#p-arrow',
    nextArrow: '#n-arrow',
    speed: 1000
});

$(".apart-image").height($(".apart-image-slider").height());
//END SLiders

//Start form 
$(document).ready(function() {
    $('#div-datepicker').mouseover(function() {
        $('#datepicker').focus();
    });

    $('.datepicker').mouseover(function() {
        $('#datepicker').focus();
    });

    $('#div-datepicker').mouseout(function() {
        $('#datepicker').blur();
    });

    $('.datepicker').mouseout(function() {
        $('#datepicker').blur();
    });

    var selectorbarheight = $('#selector-bar-id').height() + "px";
    $('.overflow-hidden').css("height", selectorbarheight);

    var inputwidth = $('#div-datepicker').width() + "px";
    $('.datepicker').css("width", inputwidth);

    $('.input-location').click(function() {
        $("#location").val($(this).text());
    });

    $("#adults_plus").click(function() {
        var val = 1 + +$("#adults").val();
        $("#adults").val(val);
        check_input_guests();
    });

    $("#adults_minus").click(function() {
        var val = -1 + +$("#adults").val();
        if (val < 0) {
            val = 0;
        }
        $("#adults").val(val);
        check_input_guests();
    });

    $("#children_plus").click(function() {
        var val = 1 + +$("#children").val();
        $("#children").val(val);
        check_input_guests();
    });

    $("#children_minus").click(function() {
        var val = -1 + +$("#children").val();
        if (val < 0) {
            val = 0;
        }
        $("#children").val(val);
        check_input_guests();
    });

    function check_input_guests() {
        var adults = $("#adults").val();
        var children = $("#children").val();

        if (adults == "0" && children == "0") {
            $("#guests").text("Кількість гостей");
        } else {
            $("#guests").text(adults + " дорослих, " + children + " дітей");
        }
    }
});
//end form

//start functions
function setBookingIcon() {
    $('.booking-icon').css({
        "border-style": "solid",
        "border-color": "#ff8c00",
        "border-width": $("#booking-id").width() * 0.01,
        "width": $(".bb-toy-thin").height(),
        "border-radius": "50%",
        "color": "#ff8c00",
        "font-size": $(".bb-toy-thin").width() * 0.35,
        "padding": $(".bb-toy-thin").height() * 0.12,
        "line-height": "120%"
    });

    $('.booking-icon').css("margin", "auto");
    $('.booking-icon').height($('.booking-icon').width());
}

function setHotelCard() {
    //hotel card settings
    $('.div-hotel-card').height($('.div-hotel-card').width() * 0.76);
    $('.fake').height($('.div-hotel-card').width() * 0.5);
    $('.hotel-card-price').height($('.div-hotel-card').width() * 0.15);
    $('.price-p-div').width($('.div-hotel-card').width() * 0.3);
    $('.old-price').css("left", $('.price-p-div').width()/2 - $('.old-price').width()/2);
    $('.old-price').css("font-size", $('.div-hotel-card').width() * 0.025);
    $('.hotel-card-discount').find("p").css("font-size", $('.div-hotel-card').width() * 0.03);

    $('.price-p').css("font-size", $('.div-hotel-card').width() * 0.025);
    $('.price-p').find("strong").css("font-size", $('.div-hotel-card').width() * 0.045);
    $('.hotel-title').css("font-size", $('.div-hotel-card').width() * 0.033);
    $('.days-ends-end-text').css("font-size", $('.div-hotel-card').width() * 0.03);
    $('.location-text').css("font-size", $('.div-hotel-card').width() * 0.03);

    $('.hotel-card-price-hover').find("p").css("font-size", $('.div-hotel-card').width() * 0.03);
    $('.hotel-card-price-hover').find("p").css("margin-top", $('.hotel-card-price').height()/2 - $('.div-hotel-card').width() * 0.03 * 0.7);
    
    $('.hotel-card-price-hover').find("p").width($('.div-hotel-card').width() * 0.3);

    $('.hotel-card-price-hover').width($('.div-hotel-card').width() * 0.3 + 1);
    //------d

    $('.hotel-card').hover(function() {
        if ($(window).width() > 1199) {
            $(this).find('.hotel-card-price-hover').animate({width: 'toggle'});
            $('.hotel-card').finish();
        }
    });
}

function animateValue(id, start, end, duration, step) {
    var range = end - start;
    var current = start;
    var increment = end > start? step : -step;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);


    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

function isScrolledIntoView(elem) {
    var $window = $(window),
        docViewTop = $window.scrollTop(),
        docViewBottom = docViewTop + $window.height(),
        elemTop = $(elem).offset().top,
        elemBottom = elemTop + $(elem).outerHeight();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
//end functions

$(document).ready(function(){
    setBookingIcon();
    setHotelCard();
});

$('#datepicker').datepicker({
    range: true,
    minDate: new Date(),
    dateFormat: "dd.mm",
    position: "bottom left"
});
$('#datepicker').data('datepicker');

if ($('.input-pattern').offset().top + $('.input-pattern').height() + 268 > $(window).innerHeight() + $(window).scrollTop()) {
    $('#datepicker').datepicker().data('datepicker').update({
        position: "top left"
    });

    $('.datepickers-container').css("top", $('.datepickers-container').offset().top + 24);
}

$(".input-dropdown").each(function() {
    $(this).css({
        top: 100 + "%"
    });

    if ($(this).offset().top + $(this).outerHeight() > $(window).innerHeight() + $(window).scrollTop()){
        $(this).css({
            top: - $(this).height()
        });
    }
});

var check = true;

$(window).scroll(function() {
    $(".input-dropdown").each(function() {
        $(this).css({
            top: 100 + "%"
        });

        if ($(this).offset().top + $(this).outerHeight() > $(window).innerHeight() + $(window).scrollTop()){
            $(this).css({
                top: - $(this).height()
            });
        }
    });

    $('#datepicker').datepicker().data('datepicker').update({
        position: "top left"
    });            

    $('.datepickers-container').css("top", 260 + $('.input-pattern').height());

    if ($('.input-pattern').offset().top + $('.input-pattern').height() + 268 > $(window).innerHeight() + $(window).scrollTop()) {
        $('.datepickers-container').css("top", 0)

        $('#datepicker').datepicker().data('datepicker').update({
            position: "top left"
        });            

        $('.datepickers-container').css("top", $('.datepickers-container').offset().top + 24);
    }

    if (isScrolledIntoView("#giant-number")) {
        if (check == true) {
            check = false;
            animateValue("giant-number", 9821, 10000, 5000, 1);   
        }
    }
});

$(window).resize(function() {
    setBookingIcon();
    setHotelCard();

    var selectorbarheight = $('#selector-bar-id').height() + "px";
    $('.overflow-hidden').css("height", selectorbarheight);

    var inputwidth = $('#div-datepicker').width() + "px";
    $('.datepicker').css("width", inputwidth);
});