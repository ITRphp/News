$(document).ready(function(){
    $('#center .btn').click (function (){
        $("#news_list").load(document.URL +"/sort/"+this.name);
        
    });
    $("#datepicker").datepicker({
        maxDate: "0"

    });
});