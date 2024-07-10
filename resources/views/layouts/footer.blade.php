<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
<footer class="footer-bg">
	<!-- Footer Content -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3  col-sm-6 col-xs-12">
					<!-- Info Widget -->
					<div class="widget">
						<div class="logo"> <img alt="" src=" {{asset('images/hotspot-logo.png')}}"> </div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat
							fringilla port.</p>
						<ul class="apps-donwloads">
							<li><img src="images/googleplay.png" alt=""></li>
							<li><img src="images/appstore.png" alt=""></li>
						</ul>
					</div>

					<!-- Info Widget Exit -->
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<!-- Follow Us -->
					<div class="widget socail-icons">
						<h5>Follow Us</h5>
						<ul>
							<li><a class="Facebook" href="#"><i class="fa fa-facebook"></i></a><span>Facebook</span>
							</li>
							<li><a class="Twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
							<li><a class="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span>
							</li>
	
						</ul>
					</div>
					<!-- Follow Us End -->
				</div>
				<div class="col-md-2  col-sm-6 col-xs-12">
					<!-- Follow Us -->
					<div class="widget my-quicklinks">
						<h5>Quick Links</h5>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Faqs</a></li>
							<li><a href="#">Packages</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
					<!-- Follow Us End -->
				</div>
				<div class="col-md-5  col-sm-6 col-xs-12">
					<!-- Newslatter -->
					<div class="widget widget-newsletter">
						<h5>Singup for Weekly Newsletter</h5>
						<div class="fieldset">
							<p>We may send you information about related events, webinars, products and services which
								we
								believe.</p>
							<form>
								<input class="" value="Enter your email address" type="text">
								<input class="submit-btn" name="submit" value="Submit" type="submit">
							</form>
						</div>
					</div>
					<div class="copyright">
						<p>© 2024 Hotspot All rights reserved.</p>
					</div>
					<!-- Newslatter -->
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src=" {{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap Core Css  -->
<script src=" {{asset('js/bootstrap.min.js')}}"></script>
<!-- Jquery Easing -->
<script src=" {{asset('js/easing.js')}}"></script>
<!-- Menu Hover  -->
<script src=" {{asset('js/carspot-menu.js')}}"></script>
<!-- Jquery Appear Plugin -->
<script src=" {{asset('js/jquery.appear.min.js')}}"></script>
<!-- Numbers Animation   -->
<script src=" {{asset('js/jquery.countTo.js')}}"></script>
<!-- Jquery Select Options  -->
<script src=" {{asset('js/select2.min.js')}}"></script>
<!-- noUiSlider -->
<script src=" {{asset('js/nouislider.all.min.js')}}"></script>
<!-- Carousel Slider  -->
<script src=" {{asset('js/carousel.min.js')}}"></script>
<script src=" {{asset('js/slide.js')}}"></script>
<!-- Image Loaded  -->
<script src=" {{asset('js/imagesloaded.js')}}"></script>
<script src=" {{asset('js/isotope.min.js')}}"></script>
<!-- CheckBoxes  -->
<script src=" {{asset('js/icheck.min.js')}}"></script>
<!-- Jquery Migration  -->
<script src=" {{asset('js/jquery-migrate.min.js')}}"></script>

<!-- Style Switcher -->
<script src=" {{asset('js/color-switcher.js')}}"></script>
<!-- PrettyPhoto -->
<script src=" {{asset('js/jquery.fancybox.min.js')}}"></script>
<!-- Wow Animation -->
<script src=" {{asset('js/wow.js')}}"></script>
<!-- Template Core JS -->
<script src=" {{asset('js/custom.js')}}"></script>
<!-- For This Page Only -->
<!-- MasterSlider -->
<script src=" {{asset('js/masterslider/masterslider.min.js')}}"></script>
<script type="text/javascript">
	(function ($) {
		"use strict";


		var slider = new MasterSlider();

		// adds Arrows navigation control to the slider.
		slider.control('arrows');

		slider.setup('masterslider', {
		   width: 1400,    // slider standard width
		   height: 560,   // slider standard height
		   layout: 'fullwidth',
		   loop: true,
		   preload: 0,
		   fillMode: 'fill',
		   instantStartLayers: true,
		   autoplay: true,
		   view: "basic"

		});
		// add scroll parallax effect

	 })(jQuery);
</script>