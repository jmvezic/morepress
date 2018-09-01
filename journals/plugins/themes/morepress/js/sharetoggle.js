$(document).ready(function(){
$( ".sharelink" ).click(function() {
  $(this).find( ".sharesuccess" ).toggleClass( "sharehighlight" );
  $(this).find( ".shareoriginal" ).toggleClass( "sharehidden" );
  var that = this;
  setTimeout(function() {$(that).find( ".sharesuccess" ).toggleClass( "sharehighlight" );}, 1000)
  setTimeout(function() {$(that).find( ".shareoriginal" ).toggleClass( "sharehidden" );}, 1000)
});
});
