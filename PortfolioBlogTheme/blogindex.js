jQuery(

// Searchbox
function(){
	var box = jQuery('#s');
	box.css({'color':'#AAA'});
	box.attr({'value':'Search....'});
	box.focus(function(){	
		box.css({'color':'#000'})
		})}

)
//Sidebar follow
jQuery(function() {

	    var sidebar   = jQuery("#primary"),
	        twindow    = jQuery(window),
	        offset     = sidebar.offset(),
	        topPadding = 15;

	    twindow.scroll(function() {
	        if (twindow.scrollTop() > offset.top) {
	            sidebar.stop().animate({
	                marginTop: twindow.scrollTop() - offset.top + topPadding
	            },200);
	        } else {
	            sidebar.stop().animate({
	                marginTop: 0
	            },200);
	        }
	    });

	});
