$(document).ready(function(){
$("main").find(".chapter > p").each(function(i)
{
  this.id="par"+i;
  $(this).prepend('<a href="#'+"par"+i+'" class="parLink">#'+"p"+i+'</a>');
});
});
