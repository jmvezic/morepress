 $(document).ready(function(){
    //user nav
    $( ".prev" ).first().css( "color", "#aaa" );
    $('.next').click(function() {
    	if ($(this).parent().parent().next().is('li')) {
    		if($(this).parent().parent().next().is(':last-child')) {$(this).parent().parent().next().find('.next').css('color','#aaa');}
    		else {$(this).parent().parent().next().find('.next').css('display','inline-block');}
        $(this).parent().parent().removeClass('active');
        $(this).parent().parent().next().addClass('active');
     }    	
    });
    $('.prev').click(function() {
    	if ($(this).parent().parent().prev().is('li')) {
    		if($(this).parent().parent().prev().is(':first-child')) {$(this).parent().parent().prev().find('.prev').css('color','#aaa');}
    		else {$(this).parent().parent().prev().find('.prev').css('display','inline-block');}
        $(this).parent().parent().removeClass('active');
        $(this).parent().parent().prev().addClass('active');
     }
    });
});