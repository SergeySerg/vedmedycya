$(function () {
    var adults, dateStart, dateFinish, children, sumPrice, redirectPath;
    /*Add check*/
    $('div.small-features div.col-md-4 p').prepend('<i class="fas fa-check text-orange"></i> ');  
    
    /*get params for redirect to search page*/
    $('a.redirect').click(function(e){        
        var selectHotelName = $('#location').val();
        adults = $("#adults").val();
        range_date = $("#datepicker").val();
        dates = range_date.split("-");
        dateStart = dates[0];
        dateFinish = dates[1];
        var token = $("input[name='csrf-token']").val();

        
        if(!dateStart || !dateFinish){
            alert('Введіть дати заїзду та виїзду');   
            return false; 
        }
        if(adults == 0 ){
            alert('Введіть кількість гостей');
            return false;     
        }
        children = $("#children").val();
        data = {            
            adults: adults,
            children: children,
            dateStart: dateStart,
            dateFinish: dateFinish                 
        }
        data = JSON.stringify(data);
        console.log('Дата', data);
        // localStorage.setItem('dateStart', dateStart);
        // localStorage.setItem('dateFinish', dateFinish);
        // localStorage.setItem('adults', adults);
        // localStorage.setItem('children', children);
        $.ajax({
            url: 'saver',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,               
                // 'Access-Control-Allow-Origin': '*',
                // 'Access-Control-Allow-Credentials': true,
                
            },
            //crossDomain: true,
            // processData: false,
            // contentType: false,
            data: data,
            dataType: "json"            

        });  
        if(!selectHotelName){
            e.preventDefault();
            alert('Введіть готель для перевірки цін');
            return false;
        }
        
        
    })   
    $('.input-location').click(function(){        
        redirectPath = $(this).attr('data-redirect');  
        $("a.redirect").prop('href', redirectPath + '?name=23');
        console.log('Ссилка для переходу', redirectPath);      
        //console.log('Шлях', redirectPath);    
    }) 
    /*/get params for redirect to search page*/

   
    $('.apart-buy').click(function(e){
        e.preventDefault();
        //getCount();
        adults = $("#adults").val();
        range_date = $("#datepicker").val();
        dates = range_date.split("-");
        dateStart = dates[0];
        dateFinish = dates[1];
        
        if(!dateStart || !dateFinish){
            alert('Введіть дати заїзду та виїзду');   
            return false; 
        }
        if(adults == 0 ){
            alert('Введіть кількість гостей');
            return false;     
        }
        children = $("#children").val();
        sumPrice = $('p.color-black').text();
        $('#sum_price').text(sumPrice);    
        $('#adults_modal').text(adults);
        if(children != 0 && children == 1){
            $('#children_modal').text('та ' + children + " дитина");
        }else{
            $('#children_modal').text('та ' + children + " дітей");    
        }        
        $('#sum_guests').text((+children) + (+adults));
        $('#date_from').text(dateStart);
        $('#date_to').text(dateFinish);
        //saveLocalStorage();
        console.log('Кількість дорослих - ', adults);
        console.log('Кількість дітей - ', children);       
    }) 
    $("button[name='reserved']").click(function(e){
        e.preventDefault();
        var data = {};
        var roomName = $('div#exampleModal h3.section-header-huge').text();
        var hotelName = $('div#exampleModal h6.section-header-small').text();
        var name = $("input[name='name']").val();
        var phone = $("input[name='phone']").val();
        var email = $("input[name='email']").val();
        var lang =  $("input[name='lang']").val();
        var token = $("input[name='csrf-token']").val();
        data = {
            roomName: roomName,
            hotelName: hotelName,
            adults: adults,
            children: children,
            dateStart: dateStart,
            dateFinish: dateFinish,
            sumPrice: sumPrice,
            name: name,
            phone: phone,
            email: email       
        }
        data = JSON.stringify(data);
        console.log('дата', data);
        $.ajax({
            url: '/' + lang + '/reserved',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            //processData: false,
            //contentType: false,
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    //alert('OK');
                    swal(trans['base.success'], "", "success");
                    //jQuery("#callback-order").trigger("reset");
                    //$("#submit-send").attr('disabled', false);
                }
                else {
                    swal(trans['base.error'], data.message, "error");
                   // $("#submit-send").attr('disabled', false);
                }
            },
            error: function (data) {
                swal(trans['base.error']);
                //$("#submit-send").attr('disabled', false);
            }

        });        
    
    /**********END call-back**************/
    })

    $('#submit-callback').click(function(e){
        e.preventDefault();        
        //e.preventDefault();
        var data = $('form#callback').serialize();
        var lang =  $("input[name='lang']").val();
        var token = $("input[name='csrf-token']").val();      
       
        $.ajax({
            url: '/' + lang + '/callback',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            //processData: false,
            //contentType: false,
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    //alert('OK');
                    swal(trans['base.success'], "", "success");
                    //jQuery("#callback-order").trigger("reset");
                    //$("#submit-send").attr('disabled', false);
                }
                else {
                    swal(trans['base.error'], data.message, "error");
                   // $("#submit-send").attr('disabled', false);
                }
            },
            error: function (data) {
                swal(trans['base.error']);
                //$("#submit-send").attr('disabled', false);
            }

        });  
    }) 
    /*Add review*/ 
    $('#send_review').click(function(e){
        e.preventDefault();        
        //e.preventDefault();
        var data = $('form#add_review').serialize();

        console.log('дата відгуку', data);
        var lang =  $("input[name='lang']").val();
        var token = $("input[name='csrf-token']").val();      
       
        $.ajax({
            url: '/' + lang + '/add_review',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            //processData: false,
            //contentType: false,
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    //alert('OK');
                    swal(trans['base.success_add_review'], "", "success");
                    //jQuery("#callback-order").trigger("reset");
                    //$("#submit-send").attr('disabled', false);
                }
                else {
                    swal(trans['base.error_add_review'], data.message, "error");
                   // $("#submit-send").attr('disabled', false);
                }
            },
            error: function (data) {
                swal(trans['base.error']);
                //$("#submit-send").attr('disabled', false);
            }

        });  
    }) 

    /*/Add review*/ 

    
   
})
function getQuantityDays() {
    var range_date = $("#datepicker").val();
    var dates = range_date.split("-");
    var dateStart = dates[0];
    var dateFinish = dates[1];   
    var days = (daydiff(parseDate(dateFinish), parseDate(dateStart)));

}
function parseDate(str) {
    var mdy = str.split('.');    
    return new Date(mdy[2], mdy[1]-1, mdy[0]);
}
function daydiff(second, first) {   
    return (second-first)/(1000*60*60*24);
}
function getCount(){
    adults = $("#adults").val();
        range_date = $("#datepicker").val();
        dates = range_date.split("-");
        dateStart = dates[0];
        dateFinish = dates[1];
        
        if(!dateStart || !dateFinish){
            alert('Введіть дати заїзду та виїзду');   
            return false; 
        }
        if(adults == 0 ){
            alert('Введіть кількість гостей');
            return false;     
        }
        children = $("#children").val();
}
function saveLocalStorage(){
    localStorage.setItem('dateStart', dateStart);
    localStorage.setItem('dateFinish', dateFinish);
    localStorage.setItem('adults', adults);
    localStorage.setItem('children', children);

}