$(document).ready(function(){
	//--Sortrirovki--
    $('#center .sort').click (function (){
        $("#news_list").load(document.URL +"/sort/"+this.name);
        
    });
    //--Kalendarik--
    $("#datepicker").datepicker({
        maxDate: "0"

    });
    //--Poisk--
   	$('#search_input').keypress(function(e){
   		if(e.which == 13) {
	   		var key = $("#search_input").val().replace(" ","&20");
	    	$("#news_list").load(document.URL+"/search/"+key);
	    }
    });
});
