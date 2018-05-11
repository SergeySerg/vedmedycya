$(document).ready(function(){ /* ... */ });

window.onload = function(){ 
    
    page.init();
    menu.init();
    header.init();
    inform.init();
    
    slidPresen.init();
    commandSlider.init();
    boardsSlider.init();
};




/* page ---------------------------------------*/
var page = {
    x: 0
};

page.init = function(){
    page.events();

    $(window).resize(function(){
        page.events();
    });
};

page.events = function(){
    this.x = window.innerWidth;

    if(this.x > 768){
        menu.desktop();
        disposition.desktop();
        logos.desktop();
    }else{
        menu.mobile();
        disposition.mobile();
        logos.mobile();
    } 
    
    if(this.x > 992){
        aboutUs.desktop();
        boards.desktop();
    }else{
        aboutUs.mobile();
        boards.mobile();
    } 
};




/* inform -------------------------------------*/
var inform = {
    active: 'active',      
    bl: '.inform',
    box: '.inform__box',
    slider: '.informSlider'
};

inform.init = function(){

    $(this.slider).slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });
     
    $(this.slider).addClass(this.active);  
};




/* menu ---------------------------------------*/
var menu = {
    active: 'active',
    button: '.mobileMenu__button',  
    cont: '.mobileMenu__cont',
    tim: 250
};

menu.init = function(){
    
    this.events();
};

menu.events = function(){
    
    $('body').on('click', this.button, function(event){
      
        if($(this).hasClass(menu.active)){
            menu.up();
        }else{
            menu.down();
        } 
    });
};

menu.up = function(){
    $(menu.button).removeClass(menu.active);
    $(menu.cont).stop(true);
    $(menu.cont).slideUp(menu.tim);
};

menu.down = function(){
    $(menu.button).addClass(menu.active);
    $(menu.cont).slideDown(menu.tim);
};

menu.desktop = function(){
    $('.header .container__col:nth-child(1)').append($('.mobileMenu .logo'));
    $('.header .container__col:nth-child(2)').append($('.mobileMenu__cont .menu'));
    $('.header .container__col:nth-child(3)').append($('.mobileMenu__cont .languages'));
    $(menu.button).removeClass(menu.active);
    $(menu.cont).removeAttr('style');
};

menu.mobile = function(){
     $('.mobileMenu__cont').append($('.header .menu'));
     $('.mobileMenu').append($('.header .logo'));
     $('.mobileMenu__cont').append($('.header .languages'));
};




/* header -------------------------------------*/
var header = {
    h: '.header',
    button: '.header__more span',
    tim: 600
};

header.init = function(){

    this.events();
};

header.events = function(){

    $('body').on('click', this.button, function(event){

        $('html, body').animate({scrollTop: $(header.h).height()}, header.tim);   
    });
};




/* aboutUs ------------------------------------*/
var aboutUs = {};
aboutUs.desktop = function(){
    $('.aboutUs-main .presenBox').append($('.aboutUs-main .container__col:nth-child(2) .button'));
};

aboutUs.mobile = function(){
    $('.aboutUs-main .container__col:nth-child(2)').append($('.aboutUs-main .presenBox .button'));
};




/* disposition --------------------------------*/
var disposition = {};
disposition.desktop = function(){
     $('.disposition .presenBox').append($('.disposition .container__col:nth-child(2) .button'));
};

disposition.mobile = function(){
     $('.disposition .container__col:nth-child(2)').append($('.disposition .presenBox .button'));
};




/* boards -------------------------------------*/
var boards = {};
boards.desktop = function(){
    $('.boards').each(function(){
        $(this).find('.presenBox').append($(this).find('.container__col:nth-child(2) .button'));
    });
};

boards.mobile = function(){
    $('.boards').each(function(){
        $(this).find('.container__col:nth-child(2)').append($(this).find('.presenBox .button'));
    });
};



/* logos --------------------------------------*/
var logos = {};
logos.desktop = function(){
     $('.logos .presenBox').append($('.logos .container__col:nth-child(2) .button'));
};

logos.mobile = function(){
     $('.logos .container__col:nth-child(2)').append($('.logos .presenBox .button'));
};




/* slidPresen ---------------------------------*/
var slidPresen = {
    active: 'active',     
    bl: '.slidPresen'
};

slidPresen.init = function(){

    if(!$(this.bl).length) return;

    $(this.bl).slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(this.bl).addClass(this.active);  
};




/* commandSlider ------------------------------*/
var commandSlider = {
    active: 'active',
    bl: '.commandSlider'
};

commandSlider.init = function(){

    if(!$(this.bl).length) return;

    $(this.bl).slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(this.bl).addClass(this.active);  
};




/* boardsSlider -------------------------------*/
var boardsSlider = {
    active: 'active',
    bl: '.boardsSlider'
};

boardsSlider.init = function(){

    if(!$(this.bl).length) return;

    $(this.bl).slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(this.bl).addClass(this.active);  
};
/**********call-back**************/
$( document ).ready(function() {
    $('#submit-send').on('click', function (event) {
        event.preventDefault();
        //console.info('Клік');
        $('#submit-send').attr('disabled', true);
        var data = new FormData($('form#callback')[0]);
        var url = $( "input[name=url]" ).val();
        console.info(url);
        $.ajax({
            url: url,
            method: 'POST',
            processData: false,
            contentType: false,
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    //alert('OK');
                    swal(trans['base.success'], "", "success");
                    jQuery("#callback").trigger("reset");
                    $("#submit-send").attr('disabled', false);
                }
                else {
                    swal(trans['base.error'], data.message, "error");
                    $("#submit-send").attr('disabled', false);
                }
            },
            error: function (data) {
                swal(trans['base.error']);
                $("#submit-send").attr('disabled', false);
            }

        });
        event.preventDefault();
    });
    /**********END call-back**************/
    /* Set params for form*/
    $('.order').on('click', function (event) {
        var id = $(this).attr('data-id');
        $( "input[name=id]" ).val( id );
        var goodName = $(this).attr('data-name');
        $( "input[name=goodName]" ).val( goodName );

    })
    /*Set params for form*/
/**********call-back**************/

    $('#submit-order').on('click', function (event) {
        event.preventDefault();

        $('#submit-order').attr('disabled', true);
        var data = new FormData($('form#callback-order')[0]);

        var lang = $( "input[name=lang]" ).val();
        //console.info(url);
        $.ajax({
            url: lang + '/callback',
            method: 'POST',
            processData: false,
            contentType: false,
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    //alert('OK');
                    swal(trans['base.success'], "", "success");
                    jQuery("#callback-order").trigger("reset");
                    $("#submit-send").attr('disabled', false);
                }
                else {
                    swal(trans['base.error'], data.message, "error");
                    $("#submit-send").attr('disabled', false);
                }
            },
            error: function (data) {
                swal(trans['base.error']);
                $("#submit-send").attr('disabled', false);
            }

        });
        event.preventDefault();
    });
    /**********END call-back**************/
});





