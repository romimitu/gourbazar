	<footer class="site-footer-wrapper" >
	    <div class="container">
	      	<div class="footer-secondary-wrapper">
		        <ul class="footer-secondary inline-list">          
		            <li><a href="#">FAQ</a></li>          
		            <li><a href="#">Press</a></li>          
		            <li><a href="#">Shipping & Returns</a></li>          
		            <li><a href="#">Terms & Privacy</a></li>          
		        </ul>        
		        <div class="">
		          	<ul class="footer-social inline-list">
						<li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		          	</ul>
		        </div>        
		        <div class="copyright">
		          	<a href="/">&copy; COPYRIGHT 2016 GourBazar</a> <br> <a href="#">MADE BY RoMi</a>
		        </div>
		        <div class="footer-centered-logo">
		          	<i class="icon icon-ra_monogram"></i>
		        </div>
		    </div>
	    </div>
	</footer>
	<script>
		jQuery(function($) {
	        $('.simple-carousel').slick({
				dots: false,
				adaptiveHeight: true,
				autoplay: true,
				easing: 'ease-in-out',
				prevArrow: '<button type="button" class="slick-prev" style="z-index:1;">Previous</button>',
				nextArrow: '<button type="button" class="slick-next">next</button>'
	        });
	     });

		jQuery(function($) {
	        $('.process-carousel').slick({
				dots: true,
				adaptiveHeight: true,
				autoplay: true,
				autoplaySpeed: 5000,
				customPaging : function(slider, i) {
				return '<div class="story-step step' + (i+1) + '">' + (i + 1) + '</div>';
				}
	        });
	        $('.step1').after("<span>EXPERIMENTING</span>");
	        $('.step2').after("<span>CREATION</span>");
	        $('.step3').after("<span>SAMPLING</span>");
	     });
    </script>
	<script src="/frontend/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="/frontend/js/custom.js" type="text/javascript"></script> 
	<script type="text/javascript" src="/frontend/js/slick.min.js"></script>