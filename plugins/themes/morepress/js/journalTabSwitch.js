 $(document).ready(function(){
    //user nav
     $('#JournalHomeArchiveTab').hide();
     $('#JournalAboutTab').hide();
     $('#JournalEditorialTab').hide();
     $('#JournalHomeSubmitTab').hide();
    $('#ShowIssue').click(function() {
        $('#JournalHomeCurrentIssueTab').slideToggle();
        $('#JournalHomeArchiveTab').slideUp();
        $('#JournalAboutTab').slideUp();
        $('#JournalEditorialTab').slideUp();
        $('#JournalHomeSubmitTab').slideUp();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); }
        else { $(this).addClass('active').siblings().removeClass('active'); }
    });
    $('#ShowArchive').click(function() {
        $('#JournalHomeCurrentIssueTab').slideUp();
        $('#JournalHomeArchiveTab').slideToggle();
        $('#JournalAboutTab').slideUp();
        $('#JournalEditorialTab').slideUp();
        $('#JournalHomeSubmitTab').slideUp();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); }
        else { $(this).addClass('active').siblings().removeClass('active'); }
    });
    $('#ShowAbout').click(function() {
        $('#JournalHomeCurrentIssueTab').slideUp();
        $('#JournalHomeArchiveTab').slideUp();
        $('#JournalAboutTab').slideToggle();
        $('#JournalEditorialTab').slideUp();
        $('#JournalHomeSubmitTab').slideUp();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); }
        else { $(this).addClass('active').siblings().removeClass('active'); }
    });
    $('#ShowEditorial').click(function() {
        $('#JournalHomeCurrentIssueTab').slideUp();
        $('#JournalHomeArchiveTab').slideUp();
        $('#JournalAboutTab').slideUp();
        $('#JournalHomeSubmitTab').slideUp();
        $('#JournalEditorialTab').slideToggle();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); }
        else { $(this).addClass('active').siblings().removeClass('active'); }
    });
    $('#ShowSubmit').click(function() {
    	  $('#JournalHomeSubmitTab').slideToggle();
        $('#JournalHomeArchiveTab').slideUp();
        $('#JournalAboutTab').slideUp();
        $('#JournalHomeCurrentIssueTab').slideUp();
        $('#JournalEditorialTab').slideUp();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); }
        else { $(this).addClass('active').siblings().removeClass('active'); }
    });
});

