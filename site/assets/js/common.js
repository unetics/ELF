	$('.notice .close').click(function() {
			$('.notice').hide();
	});
	
$(window).bind("load", function() {
var footer = $("footer.sticky");
var pos = footer.position();
var height = $(window).height();
height = height - pos.top;
height = height - footer.height();
    if (height > 0) {
	  footer.css({'margin-top' : height+'px'});
  }
});