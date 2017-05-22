
 $(document).ready(function(){
    //user nav
     $('.categoryChild').hide();
    $('.CategoryBlockSubtitle').click(function() {
        $(this).siblings('.categoryChild').slideUp();
        $(this).find('.categoryChild').slideToggle();
    });
});