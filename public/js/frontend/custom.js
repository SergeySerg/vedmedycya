$(function () {
    $('.apart-buy').click(function(){
        var adults = $("#adults").val();
        var children = $("#children").val();
        console.log('Кількість дорослих - ', adults);
        console.log('Кількість дітей - ', children);
       
    }) 
    
   
})
function getQuantityDays() {
    var range_date = $("#datepicker").val();
    var dates = range_date.split("-");
    var dateStart = dates[0];
    var dateFinish = dates[1];
    // if(!dateStart || !dateFinish){
    //     alert('Введіть дати заїзду та виїзду');    
    // }
    var days = (daydiff(parseDate(dateFinish), parseDate(dateStart)));

}
function parseDate(str) {
    var mdy = str.split('.');    
    return new Date(mdy[2], mdy[1]-1, mdy[0]);
}
function daydiff(second, first) {   
    return (second-first)/(1000*60*60*24);
}