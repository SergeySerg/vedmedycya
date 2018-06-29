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
  
  var unvisibleDatepicker = true;
  var selectedData = "";
  
  //Start form 
  $(document).ready(function() {      
      $('#div-datepicker').hover(function() {
          $('#datepicker').focus();
          unvisibleDatepicker = true;
      }, function() {
          $('#datepicker').blur();
      });
  
      $('.datepicker').hover(function() {
          if (unvisibleDatepicker == true) {
              $('#datepicker').focus();
          }
  
          $('.datepicker--cell-day').hover(function() {
              if (!$(this).hasClass("-disabled-")) {
                  var month = (parseInt($(this).attr("data-month")) + 1).toString();
                  var day = $(this).text();
  
                  if (day.length == 1) {
                      day = "0" + $(this).text();
                  }
  
                  if (month.length == 1) {
                      month = "0" + (parseInt($(this).attr("data-month")) + 1).toString();
                  }
  
                  if(selectedData.length < 10) {
                      $("#datepicker").val(selectedData + day + "." + month);
                  }
              }
          }, function() {
              if (selectedData.length > 5 && selectedData.length < 10) {
                  $("#datepicker").val(selectedData + "дата виїзду");
              } else if(selectedData.length > 10) {
                  $("#datepicker").val(selectedData);
              } else {
                  $("#datepicker").val("");
              }
          });
      }, function() {
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
          if (val > 8) {
              val = 8;
          }
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
          if (val > 4) {
              val = 4;
          }
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
          setPriceAfterEnterGuests(adults, children);
          if (adults == "0" && children == "0") {
              $("#guests").text("Кількість гостей");
          } else {
              $("#guests").text(adults + " дорослих, " + children + " дітей");
              //setPriceAfterEnterGuests(adults, children);
          }
      }
      /*Custom js*/
      function setPriceAfterEnterGuests(adults, children){
          //alert('re');
          var sumQuantityGuests = (+adults) + (+children);
          var baseQuantityGuests =  $('#base_guests').text();
          var maxQuantityGuests =  $('#max_guests').text();
          var surcharge = $('#surcharge').text();
          var surcharge_children = $('#surcharge_children').text();
          if(sumQuantityGuests > baseQuantityGuests || sumQuantityGuests == baseQuantityGuests){
              var diff = baseQuantityGuests - (+adults);
              var price = $('span.price').text();                       
              var days = $('#days').text(); 
              var result;
              if(diff > 0){
                  result = Math.abs(diff - (+children)) * surcharge_children;                  
                  console.log('Різниця', result);
              }else{
                  result = (Math.abs(diff) * surcharge) + (children * surcharge_children);
                  console.log('Різниця', result);
              }              
              $('p.color-black').text(days * (+(price) + result));
              $('#result_price').text(1 * (+(price) + result));
          }
        //   console.log('Загальна кількість', sumQuantityGuests);
        //   console.log('Дорослі', adults);
        //   console.log('Діти', children);
        //   console.log('Доплата за дорослого', surcharge);
        //   console.log('Доплата за дитину', surcharge_children);
        //   console.log('Дні', days);


      }
  });
  //end form
  
  //start functions
  function setBookingIcon() {
      $('.booking-icon').css({
          "border-style": "solid",
          "border-color": "#ff8c00",
          "border-width": $("#feature").find(".col-md-3").width() * 0.01,
          "width": $(".bb-toy-thin").height(),
          "border-radius": "50%",
          "color": "#ff8c00",
          "font-size": $(".bb-toy-thin").width() * 0.4,
          "padding": $(".bb-toy-thin").height() * 0.16,
          "line-height": "120%"
      });
  
      $('.booking-icon').css("margin", "auto");
      $('.booking-icon').height($('.booking-icon').width());
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
  
      $("#input-drop-location").click(function() {
          $(this).removeClass("add-drop");
      });
  
      $(".input-pattern").hover(function() {
          $(this).find(".input-dropdown").addClass("add-drop");
      }, function() {
          $(this).find(".input-dropdown").removeClass("add-drop");
      });
  });
  
  $('#datepicker').datepicker({
      range: true,
      minDate: new Date(),
      dateFormat: "dd.mm.yyyy",
      position: "bottom left",
      autoClose: true,
      onSelect: function() {
          var temp = $("#datepicker").val();          
          selectedData = temp;
  
          if (temp.length == 10) {
              $("#datepicker").val($("#datepicker").val() + " - дата виїзду");
              selectedData += " - ";
              
          } else {
            unvisibleDatepicker = false;
            var range_date = $("#datepicker").val();            
            var dates = range_date.split("-");
            var dateStart = dates[0];
            var dateFinish = dates[1];
            // if(!dateStart || !dateFinish){
            //     alert('Введіть дати заїзду та виїзду');    
            // }
            var days = (daydiff(parseDate(dateFinish), parseDate(dateStart)));
            var price = $('#result_price').text(); 
            $('#days').text(days);           
            $('p.color-black').text(days*price);
            if(days == 1){
                $('#quantity_days').text('грн за 1 ніч');
            }else{
                $('#quantity_days').text('грн за ' + days + ' ночі');
            }            
           }
      }
  });
    /*Custom js*/
    function getQuantityDays() {
        alert('we');
        var range_date = $("#datepicker").val();
        console.log('кількість днів===>', range_date);
        var dates = range_date.split("-");
        var dateStart = dates[0];
        var dateFinish = dates[1];
        // if(!dateStart || !dateFinish){
        //     alert('Введіть дати заїзду та виїзду');    
        // }
        var days = (daydiff(parseDate(dateFinish), parseDate(dateStart)));
        console.log('кількість днів===>', days);
        return days;
    }
    function parseDate(str) {
        var mdy = str.split('.');    
        return new Date(mdy[2], mdy[1]-1, mdy[0]);
    }
    function daydiff(second, first) {   
        return (second-first)/(1000*60*60*24);
    }
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
          position: "bottom left"
      });            
  
      if ($('.input-pattern').offset().top + $('.input-pattern').height() + 268 > $(window).innerHeight() + $(window).scrollTop()) {
          $('.datepickers-container').css("top", 0);
  
          $('#datepicker').datepicker().data('datepicker').update({
              position: "top left"
          });            
  
          $('.datepickers-container').css("top", $('.datepickers-container').offset().top + 24);
      } else {
          $('.datepickers-container').css("top", 0);
      }
  
      if (document.getElementById('giant-number')) {
          if (isScrolledIntoView("#giant-number")) {
              if (check == true) {
                  check = false;
                  animateValue("giant-number", 9821, 10000, 5000, 1);   
              }
          }
      }
  });
  
  $(window).resize(function() {
      setBookingIcon();
  
      var selectorbarheight = $('#selector-bar-id').height() + "px";
      $('.overflow-hidden').css("height", selectorbarheight);
  
      var inputwidth = $('#div-datepicker').width() + "px";
      $('.datepicker').css("width", inputwidth);
  });
