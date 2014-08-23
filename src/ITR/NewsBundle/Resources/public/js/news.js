    adaptAffix = function adaptAffix(){
        var $affixElement1 = $('#affix1');
        $affixElement1.width($affixElement1.parent().width());
        var $affixElement2 = $('#affix2');
        $affixElement2.width($affixElement2.parent().width()-30);
    }


$(document).ready(function(){
	//--Sortrirovki--
    adaptAffix();
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
    //--affix fix--
    $(window).resize(adaptAffix);
});
