
	<!-- Footer  -->

	<div class="footer-top-bg">
		<div class="row">

			<!-- Linkset -->
			<div class="footer-links small-12 medium-3 large-3 columns">
				<!-- Heading -->
				<div class="footer-links-heading">خدمات سفارشی</div>
				<!-- End Heading -->
				<!-- Links -->
				<ul class="flinks">
					<li><a href="#">ورود به صفحه</a></li>
					<li><a href="#">بررسی وضعیت سفارش</a></li>
					<li><a href="#">                            بخش حمل و نقل</a></li>
					<li><a href="#">سبد خرید</a></li>
					<li><a href="#">حساب کاربری</a></li>
				</ul>
				<!-- End Links -->
			</div>
			<!-- End Linkset -->

			<!-- Linkset -->
			<div class="footer-links small-12 medium-3 large-3 columns">
				<!-- Heading -->
				<div class="footer-links-heading">اطلاعات</div>
				<!-- End Heading -->
				<!-- Links -->
                <ul class="flinks">
                    <li><a href="#">ورود به صفحه</a></li>
                    <li><a href="#">بررسی وضعیت سفارش</a></li>
                    <li><a href="#">                            بخش حمل و نقل</a></li>
                    <li><a href="#">سبد خرید</a></li>
                    <li><a href="#">حساب کاربری</a></li>
                </ul>
				<!-- End Links -->
			</div>
			<!-- End Linkset -->
			
			<!-- Linkset -->
			<div class="footer-links small-12 medium-3 large-3 columns">
				<!-- Heading -->
				<div class="footer-links-heading">پشتیبانی از ما</div>
				<!-- End Heading -->
				<!-- Links -->
                <ul class="flinks">
                    <li><a href="#">ورود به صفحه</a></li>
                    <li><a href="#">بررسی وضعیت سفارش</a></li>
                    <li><a href="#">                            بخش حمل و نقل</a></li>
                    <li><a href="#">سبد خرید</a></li>
                    <li><a href="#">حساب کاربری</a></li>
                </ul>
				<!-- End Links -->
			</div>
			<!-- End Linkset -->
			
			<!-- Linkset -->
			<div class="footer-links small-12 medium-3 large-3 columns">
				<!-- Heading -->
				<div class="footer-links-heading">افزودنیهای پیشنهاد شده</div>
				<!-- End Heading -->
				<!-- Links -->
                <ul class="flinks">
                    <li><a href="#">ورود به صفحه</a></li>
                    <li><a href="#">بررسی وضعیت سفارش</a></li>
                    <li><a href="#">                            بخش حمل و نقل</a></li>
                    <li><a href="#">سبد خرید</a></li>
                    <li><a href="#">حساب کاربری</a></li>
                </ul>
				<!-- End Links -->
			</div>
			<!-- End Linkset -->
			
			
		</div>
	</div>
	<!-- End Footer Links -->
	<!-- Footer Copleft -->
	<div class="footer-copyleft-bg">
		<!-- Content Row -->
		<div class="row">

		<!-- Copyleft Info -->
		<div class="small-12 small-centered large-uncentered medium-uncentered medium-6 large-10 copyleft columns">
            کپی رایت@2015 تمام حقوق مادی و معنوی این سایت متعلق به گروه برنامه نویسان میباشد

		</div>
		<!-- End Copyleft Info -->

		<div class="small-10 small-centered  medium-uncentered medium-3 large-2  columns">
			<!-- Social icons -->
			<div class="socialicons">
				<a href="#"><i class="icon-facebook"></i></a>
				<a href="#"><i class="icon-twitter"></i></a>
				<a href="#"><i class="icon-google-plus"></i></a>
				<a href="#"><i class="icon-instagram"></i></a>
			</div>
			<!-- End Social Icons -->
		</div>

		</div>
		<!-- End Row -->
		
	</div>
	<!-- End Footer Copyleft Bg -->
	<!-- End Footer -->

  <script type="text/javascript" src="public/default/javascripts/vendor/jquery.js">
  </script>
  <script src="public/default/javascripts/foundation/foundation.js"></script>

  <script type="text/javascript" src="public/default/javascripts/nexx.js"></script>

  <!-- FlexSlider -->
    <script type="text/javascript" src="public/default/javascripts/vendor/jquery.flexslider-min.js"></script>
    <script type="text/javascript">

    // Main Slider
    var $ = jQuery.noConflict();
    $(window).load(function() {

    $('.flexslider').flexslider();

	});

   </script>

      <!-- Jquery Selectric (Custom Selecbox Styling ) -->
   <script type="text/javascript" src="public/default/javascripts/jquery.selectric.js"></script>
   <script type="text/javascript">
   $(function(){
	$('select').selectric(); // this function turn all <select> to custom Styling for specific select box use $("#selectbox").selectric(); 
	 });
   </script>
     <!-- Owl Carousel -->
   <script src="public/default/owl-carousel/owl.carousel.min.js"></script>

   <!--  Image Zoom Plugin -->
   <script src="public/default/javascripts/zoomsl-3.0.min.js"></script>
   <script>
jQuery(function(){

	$(".p-photo").imagezoomsl({ 
		
					
		zoomrange: [1.68, 10],
		zoomstart: 1.68,
		cursorshadeborder: "10px solid black",
		magnifiereffectanimate: "fadeIn",	
	});
  

	$(".item img").click(function(){

	    var that = this;
		$(".p-photo").fadeOut(600, function(){
		
			$(this).attr("src", 	   $(that).attr("data-medium"))
				   .attr("data-large", $(that).attr("data-tmb-large"))
				   .fadeIn(1000);				
		});

	    return false;
	});  

});
</script>


</body>
</html>
