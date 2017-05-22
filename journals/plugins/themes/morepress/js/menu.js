jQuery(document).ready(function($){
	$( ".mtoggle" ).click(function() {
		$( ".menu" ).slideToggle(500);
	});


    $("#skip-to-content").click(function() {
        $("#content").focus()
    });
    
     $('#content').find('img').click(function(){
	 	$("#openModal").toggleClass("modalDialogOpen");
	 	$("#modalImage").attr("src",$(this).attr("src"));
  	 });
  	 
  	 $("#close").click(function(){
	 	$("#openModal").toggleClass("modalDialogOpen");
    		return false;
  	 });
  	 
  	 $("#modalImage").click(function () {$("#openModal").toggleClass("modalDialogOpen");})

});