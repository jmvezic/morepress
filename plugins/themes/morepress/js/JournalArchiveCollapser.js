 $(document).ready(function(){
    //user nav
     $('.yearChild').show();
    $('.yearParent').click(function() {
        $(this).siblings('.yearChild').slideUp();
        $(this).find('.yearChild').slideToggle();
    });
    
});