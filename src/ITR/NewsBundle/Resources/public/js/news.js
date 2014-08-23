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
});