 $(document).ready(function(){
    //user nav
     $('.sectionChild').show();
    $('.tocSectionTitle').click(function(e) {
    	  if ($(this).hasClass('hidden')) {$(this).siblings('.sectionChild').slideToggle();$(this).removeClass('hidden');}
    	  else {$(this).siblings('.sectionChild').slideUp();$(this).addClass('hidden');}
        e.preventDefault();
    });
});