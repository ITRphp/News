$(document).ready(function(){
    $('#center .sort').click (function (){
        $("#news_list").load(document.URL +"/sort/"+this.name);
        
    });
    $("#datepicker").datepicker({
        maxDate: "0"

    });
     $('.selectpicker').selectpicker({
         style: 'btn-info',
         size:10
     });
      $('.select').selectpicker({
         style: 'btn-info',
         size:5
     });
     $('.carousel').carousel({
        interval: 2000,
        pause: 'hover'
    });
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
    $('.scrollup').fadeIn();
    } else {
    $('.scrollup').fadeOut();
    }
    });

    $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
    });

});
$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});