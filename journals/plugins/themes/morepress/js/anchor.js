 $(document).ready(function(){
    //user nav
     $('p').show();
    $('h1').click(function() {
    	  if ($(this).parent().hasClass('hidden')) {
					$(this).parent().removeClass('hidden');
					$(this).removeClass('hidden');
					$(this).siblings().slideToggle();
			}
        else {
					$(this).parent().addClass('hidden');
					$(this).addClass('hidden');
					$(this).siblings().slideUp();
			}
        
        
    });

var header = $("#changeLocale");
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
       if (scroll >= window.innerHeight) {
          header.addClass("fixed");
		  $("#changeLocale").attr("id", "changeLocale").appendTo("#submit");
        } else {
          header.removeClass("fixed");
		  $("#changeLocale").attr("id", "changeLocale").prependTo("#submit");
        }
});


    
});
