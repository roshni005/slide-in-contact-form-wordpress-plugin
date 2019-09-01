(function ( $ ) {
	"use strict";

	$(function () {
		$( document ).ready(function() {	
			var contheight = jQuery( ".form-content" ).outerHeight()+2;      	
	      	jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );

	      	jQuery( ".slide-in-form" ).css( "visibility", "visible" );

	      	jQuery('.slide-in-form').addClass("open_sticky_form");
	      	jQuery('.slide-in-form').addClass("form-content-bounce-in-up");
	      	
	        jQuery( ".form-header" ).click(function() {
	        	if(jQuery('.slide-in-form').hasClass("open"))
	        	{
	        		jQuery('.slide-in-form').removeClass("open");
	        		jQuery( ".slide-in-form" ).css( "bottom", "-"+contheight+"px" );
	        	}
	        	else
	        	{
	        		jQuery('.slide-in-form').addClass("open");
	          		jQuery( ".slide-in-form" ).css( "bottom", 0 );		
	        	}
	          
	        });		    
		});
	});

}(jQuery));