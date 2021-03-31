// NEXX HTML COMMON JAVASCRIPT FILE
// @author: themeforest.net/user/haab
// @copyright 2013 haabnaseem@maldivehosting.net

  // Product Hover Function (Show Add to cart Buttons )

  $(document).ready(function() { 

  	$(".f-product").mouseenter(function() {
  		
  		//$(this).children(".f-product-hover").addClass("slideDown");
  		//$(this).children(".f-product-hover").show();

  	});

  	$(".f-product").mouseleave(function() {
  		//$(this).children(".f-product-hover").removeClass("slideDown");
  		//$(this).children(".f-product-hover").hide();

  	});

  });

  // Dropdown Menu
  if (Modernizr.touch) {   
   // alert('Touch Screen');
   $(".menu-icon").show();

   $(".mainnav").hide();
   
   $(".menu-icon").click(function() {
   	$(".mainnav").slideToggle();
   });

  


   	$("ul.navigation li").click(function() { 

		$(".dropdown-menu").hide();
		 if($(this).children(".dropdown-menu").length > 0) {  
			// Check if it has dropdown (onclick it wont go to the url)
			$(this).children(".dropdown-menu").show();
			return false;

		 }
		 else {
		// 	// ok, no dropdowns(send to href url)
		 	return true;
		 }

   }); 

   	$(".dropdown-menu > ul >li a").click(function() { 

   		var link = $(this).attr('href');
   		window.location = link;

   	});
   

} 
else { 

	
$("ul.navigation li").mouseenter(function() { 
		//alert('test');

		
		$(this).children(".dropdown-menu").show();
		
		
		

	});

	$("ul.navigation li").mouseleave(function() { 
		
			$(this).children(".dropdown-menu").hide("300");
			
			event.stopPropagation();
		 
	}); 
   // alert('No Touch Screen');  
} 

// Shopping Cart Dropdown

$(document).ready(function() { 

	$(".topcart-arrow-down a").click(function(e) { 
		e.stopPropagation();
		$(".cart-dropdown").show();
		$(".cart-dropdown").addClass("pullDown");
		$(this).children("i").addClass("bigEntrance");
		$(this).children("i").removeClass("icon-arrow-down").addClass("icon-arrow-up");

	});

	$('.cart-dropdown, .top-cart-arrow-down a').click(function(e) {
    	e.stopPropagation();
    });

    $(document).click(function() {

        $(".cart-dropdown").removeClass("pullDown");
        $(".cart-dropdown").hide();
        $(".icon-arrow-up").removeClass("icon-arrow-up").addClass("icon-arrow-down");

	
    });




});


// FACEBOOK IFRAME FIX FOR INTERNET EXPLORER

$(document).ready(function () {
  $("#fb_iframe").attr('allowTransparency', 'true');
  //$("#fb_iframe").attr('frameborder', '0');
  $("#fb_ifame").attr('scrolling', '0');
});

// TAB PLUGIN

$(document).ready(function() { 

	$("ul.tabs li a").click(function() {
		var attr = $(this).attr('id');
		$("ul.tabs li a").removeClass('active');
		$(this).addClass("active");
		$(".tab-content").hide();
		$(attr).show();
		$(".tab-content").removeClass("slideUp");
		$(".tab-content").addClass("slideUp");
		
	});
});


// QUANTITY INPUT

$(document).ready(function() {
	$(".qnt").click(function() {
		var attr = $(this).attr('id');

		if(attr=='plus') {

			var current = $("#p_quantity").val();
			var new_val = parseFloat(current)+1;
			//$("#p_quantity").val('');
			$("#p_quantity").val(new_val);

		}
		else { 

			// check if its is below 1 
			if($("#p_quantity").val()=="1") {
				return false;
			}
			else { 
			var current = $("#p_quantity").val();
			var new_val = parseFloat(current)-1;
			//$("#p_quantity").val('');
			$("#p_quantity").val(new_val);
		}
		}
	});
});

// CAROUSEL THUMB GALLERY IN PRODUCT PAGE (Owl Carousel Jquery Plugin):

$(document).ready(function() {
 
  $("#carousel-gallery").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 		pagination: false,
      items : 4
 
  });
 
});