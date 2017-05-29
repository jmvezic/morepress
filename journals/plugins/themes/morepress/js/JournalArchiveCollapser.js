 $(document).ready(function(){
    //user nav
     $('.yearChild').show();
    $('#JournalHomeArchiveYearLabel').click(function(e) {
    	  if ($(this).hasClass('hidden')) {$(this).siblings('.yearChild').slideToggle();$(this).removeClass('hidden');}
    	  else {$(this).siblings('.yearChild').slideUp();$(this).addClass('hidden');}
        e.preventDefault();
    });
});
