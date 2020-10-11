<footer class="footer footer-2">

	<div class="footer-middle border-0">
		<div class="container">
			@php
				use App\Settings;$settings = Settings::all();
                 $settingsArr = [];
                 foreach ($settings as $setting) {
                     $settingsArr[$setting->key] = $setting->value;
                 }

			@endphp
			<div class="row">
				<div class="col-sm-12 col-lg-6">
					<div class="widget widget-about">
						<img src="/{{$settingsArr['logo'] ?? ''}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
						<p>{{$settingsArr['address'] ?? ''}}</p>

						<div class="widget-about-info">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<span class="widget-about-title">Got Question? Call us 24/7</span>
									<a href="tel:123456789">{{$settingsArr['phone'] ?? ''}}</a>
								</div><!-- End .col-sm-6 -->
								<div class="col-sm-6 col-md-8">
									<span class="widget-about-title">Payment Method</span>
									<figure class="footer-payments">
										<img src="/site/assets/images/payments.png" alt="Payment methods" width="272" height="20">
									</figure><!-- End .footer-payments -->
								</div><!-- End .col-sm-6 -->
							</div><!-- End .row -->
						</div><!-- End .widget-about-info -->
					</div><!-- End .widget about-widget -->
				</div><!-- End .col-sm-12 col-lg-3 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4><!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="about.html">About Molla</a></li>
							<li><a href="#">How to shop on Molla</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="login.html">Log in</a></li>
						</ul><!-- End .widget-list -->
					</div><!-- End .widget -->
				</div><!-- End .col-sm-4 col-lg-3 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="#">Payment Methods</a></li>
							<li><a href="#">Money-back guarantee!</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul><!-- End .widget-list -->
					</div><!-- End .widget -->
				</div><!-- End .col-sm-4 col-lg-3 -->

				<div class="col-sm-4 col-lg-2">
					<div class="widget">
						<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

						<ul class="widget-list">
							<li><a href="#">Sign In</a></li>
							<li><a href="cart.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul><!-- End .widget-list -->
					</div><!-- End .widget -->
				</div><!-- End .col-sm-64 col-lg-3 -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End .footer-middle -->

	<div class="footer-bottom">
		<div class="container-fluid">
			<p class="footer-copyright">{{$settingsArr['footertext'] ?? ''}}</p><!-- End .footer-copyright -->
			<ul class="footer-menu">
				<li><a href="#">Terms Of Use</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul><!-- End .footer-menu -->

			<div class="social-icons social-icons-color">
				<span class="social-label">Social Media</span>
				<a href="{{$settingsArr['facebook'] ?? ''}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
				<a href="{{$settingsArr['twitter'] ?? ''}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
				<a href="{{$settingsArr['twitter'] ?? ''}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
				<a href="{{$settingsArr['youtube'] ?? ''}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
			</div><!-- End .soial-icons -->
		</div><!-- End .container -->
	</div><!-- End .footer-bottom -->
</footer>