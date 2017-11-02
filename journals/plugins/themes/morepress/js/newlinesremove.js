$(document).ready(function () {         

    $("#abstract").bind('paste', function (e) {
        setTimeout(function () { DisplayPastedData(); }, 100);
    });    

});



function DisplayPastedData() {
if ($('#removeLines').is(':checked')) {
    var data = $("#abstract").val();
    data = data.replace(/(\r\n|\n|\r)/gm,"");
    $("#abstract").val(data);
}
}
