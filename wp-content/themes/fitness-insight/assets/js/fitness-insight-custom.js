jQuery(function($){
 	"use strict";
   	jQuery('.gb_navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
  	});
});

function fitness_insight_gb_Menu_open() {
	jQuery(".side_gb_nav").addClass('show');
}
function fitness_insight_gb_Menu_close() {
	jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
	$('.gb_toggle').click(function () {
        fitness_insight_Keyboard_loop($('.side_gb_nav'));
    });
});