<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Earncapitalx - {{ $title ?? "" }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/plugins.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/blocks.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/widgets.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/theme-styles.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}">
	<style>
    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto;
    }

    .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }
	</style>
</head>

<body class="crumina-grid">

	<!-- Preloader -->

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="135" height="140" fill="#fff">
				<rect width="15" height="120" y="10" rx="6">
					<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="30" y="10" rx="6">
					<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="140" x="60" rx="6">
					<animate attributeName="height" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="90" y="10" rx="6">
					<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="120" y="10" rx="6">
					<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
			</svg>

			<div class="text">Loading ...</div>
		</div>
	</div>

	<!-- ... end Preloader -->

		<!-- Header -->
	<header class="header" id="site-header" style="z-index: 20;">
		<div class="container">
			<div class="header-content-wrapper">
				<a href="{{ route('main.index') }}" class="site-logo">
					<span>Earncapitalx</span>
				</a>

				<nav id="primary-menu" class="primary-menu">

					<!-- menu-icon-wrapper -->

					<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
						<span class="mob-menu--title">Menu</span>
						<span id="menu-icon-wrapper" class="menu-icon-wrapper">
							<svg width="1000px" height="1000px">
								<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
								<path id="pathE" d="M 300 500 L 700 500"></path>
								<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
							</svg>
						</span>
					</a>

					<ul class="primary-menu-menu">
						<li>
							<a href="{{ route('main.index') }}">Home</a>
						</li>

						<li class="menu-item-has-children">
							<a href="#">Cryptocurrencies</a>
							<ul class="sub-menu sub-menu--with-icons">
								<li class="menu-item-has-children">
									<a href="{{ route('main.crypto') }}">
										<img src="{{ asset('assets/front/img/if_Bitcoin_2745023.png') }}" class="woox-icon" alt="bitcoin">
										Bitcoin <span>BTC</span>
										<svg class="woox-icon icon-arrow-right-line">
											<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}"></use>
										</svg>
									</a>

								</li>
								<li class="menu-item-has-children">
									<a href="{{ route('main.crypto') }}">
										<img src="{{ asset('assets/front/img/if_etherium_eth_ethcoin_crypto_2844386.png') }}" class="woox-icon" alt="bitcoin">
										Ethereum <span>ETH</span>
										<svg class="woox-icon icon-arrow-right-line">
											<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}"></use>
										</svg>
									</a>

								</li>
								<li class="menu-item-has-children">
									<a href="{{ route('main.crypto') }}">
										<img src="{{ asset('assets/front/img/if_dash_dashcoin_2844383.png') }}" class="woox-icon" alt="bitcoin">
										Dash <span>DASH</span>
										<svg class="woox-icon icon-arrow-right-line">
											<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}"></use>
										</svg>
									</a>

								</li>
								<li class="menu-item-has-children">
									<a href="{{ route('main.crypto') }}">
										<img src="{{ asset('assets/front/img/if_litecion_ltc_lite_coin_crypto_2844390.png') }}" class="woox-icon" alt="litecoin">
										Litecoin <span>LTC</span>
										<svg class="woox-icon icon-arrow-right-line">
											<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}"></use>
										</svg>
									</a>

								</li>
								<li class="menu-item-has-children">
									<a href="{{ route('main.crypto') }}">
										<img src="{{ asset('assets/front/img/if_ripple_xrp_coin_2844396.png') }}" class="woox-icon" alt="bitcoin">
										Ripple <span>XRP</span>
										<svg class="woox-icon icon-arrow-right-line">
											<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}"></use>
										</svg>
									</a>

								</li>
							</ul>
						</li>

						<li class="menu-item-has-children">
							<a href="{{ route('main.experts') }}">Experts</a>
						</li>



						<li class="menu-item-has-mega-menu menu-item-has-children">
							<a href="#">Events</a>

							<div class="megamenu megamenu-with-slider">

								<div class="crumina-module crumina-module-slider slider-item--equal-height">
									<div class="row">
										<div class="col-lg-3">
											<div class="crumina-module crumina-heading heading--with-decoration heading--h5">
												<h5 class="heading-title">Upcoming Events</h5>
												<div class="heading-text">Investigationes demonstraverunt lectores legere me lius quod ii legunt faucibus ac feugiat sed lectus. </div>
											</div>
											<div class="swiper-btn-wrap">
												<div class="swiper-btn-prev">
													<svg class="woox-icon icon-line-arrow-left">
														<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line#icon-line-arrow-left') }}"></use>
													</svg>
												</div>

												<div class="swiper-btn-next">
													<svg class="woox-icon icon-line-arrow-right">
														<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-line-arrow-right') }}"></use>
													</svg>
												</div>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="swiper-container" data-show-items="3" data-prev-next="1">
												<div class="swiper-wrapper">
													<div class="swiper-slide">
														<a href="{{ route('main.events') }}" class="crumina-module crumina-event-item">
															<div class="event-thumb bg-event1">
																<div class="overlay"></div>
															</div>
															<div class="event-content">
																<div class="event-date">
																	<svg class="woox-icon icon-school-calendar">
																		<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-school-calendar') }}"></use>
																	</svg>
																	March 16, 2018
																</div>
																<h6 class="event-title">What is Bitcoin? A Step-By-Step Guide For Beginners</h6>
															</div>
														</a>
													</div>
													<div class="swiper-slide">
														<a href="{{ route('main.events.details') }}" class="crumina-module crumina-event-item">
															<div class="event-thumb bg-event2">
																<div class="overlay"></div>
															</div>
															<div class="event-content">
																<div class="event-date">
																	<svg class="woox-icon icon-school-calendar">
																		<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-arrow-right-line') }}#icon-school-calendar"></use>
																	</svg>
																	March 16, 2018
																</div>
																<h6 class="event-title">Apply them in Your Own Routines</h6>
															</div>
														</a>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</li>

						<li class="menu-item-has-mega-menu menu-item-has-children">
							<a href="{{ route('main.tabs') }}">FXTM PIVOT</a>
						</li>

						<li class="">
							<a href="{{ route('main.about') }}">About Us</a>
						</li>
						<li class="">
							<a href="{{ route('main.contacts') }}">Contacts</a>
						</li>
						<li class="">
							<div id="google_translate_element"></div>
						</li>
					</ul>

				</nav>
				<a href="{{ route('login') }}"><button class="btn btn--small btn--yellow">Login</button></a>
			</div>
		</div>
	</header>
	<!-- ... end Header -->


	<!-- ... main content -->
    @yield('content')
    <!-- ... end main coontent -->


	<footer id="site-footer" class="footer" style="padding-top: 30px;">
		<canvas id="can"></canvas>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12">
					<div class="widget w-info">
						<a href="{{ route('main.index') }}" class="site-logo">
							<img src="{{ asset('favicon.png') }}" alt="Earncapitalx" style="height:40px; width:40px;">
							Earncapitalx
						</a>
						<p>
						    Contact us as: <a href="mailto:support@earncapitalx.com?subject=Hello">support@earncapitalx.com</a>
							Phone: <a href="tel:+16073218191">+1 607-321-8191</a>
							<Address>
								3013 Cliffside Drive
								Binghamton, NY 13901
							</Address>
						</p>
						<p>
							Earncapitalx Limited is a member of Financial Commission, an international organization engaged in a resolution of disputes within the financial services industry in the Forex market.
						</p>
					</div>

					<div class="widget w-contacts">
						<ul class="socials socials--white">
							<li class="social-item">
								<a href="#">
									<i class="fab fa-twitter woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="#">
									<i class="fab fa-dribbble woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="#">
									<i class="fab fa-instagram woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="#">
									<i class="fab fa-linkedin-in woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="#">
									<i class="fab fa-facebook-square woox-icon"></i>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12">

						<span> <script>document.write(new Date().getFullYear())</script>.</span>
						<span><a href="index.php">The Earncapitalx</a> - ICO and Cryptocurrency Investment.</span>

						<div class="logo-design">
							<img src="{{ asset('assets/front/img/logo-fire.png') }}" alt="ThemeFire">
							<div class="design-wrap">
								<div class="sup-title">love </div>
								<a href="templatespoint.net" class="logo-title">Earncapitalx Point</a>
							</div>
						</div>

						<div class="logo-design logo-design-crumina">
							<img src="{{ asset('assets/front/img/crumina-logo.png') }}" alt="Crumina">
							<div class="design-wrap">
								<div class="sup-title"></div>
								<a target="_blank" href="#">Earncapitalx</a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

		<a class="back-to-top" href="#">
			<svg class="woox-icon icon-top-arrow">
				<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg') }}#icon-top-arrow"></use>
			</svg>
		</a>
	</footer>

	<!-- ... end Footer -->


	<script src="{{ asset('assets/front/js/method-assign.js') }}"></script>

	<!-- jQuery first, then Other JS. -->
	 <script type="text/javascript">
		function googleTranslateElementInit() {
		new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
		}
	</script>

	<script type="text/javascript"
		src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/front/js/map-shortcode.js') }}"></script>

	<script src="{{ asset('assets/front/js/js-plugins/crum-mega-menu.js') }}"></script>
	<script src="{{ asset('assets/front/js/theme-plugins.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/ajax-pagination.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/material.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/orbitlist.js') }}"></script>

	<script src="{{ asset('assets/front/js/js-plugins/bootstrap-datepicker.js') }}"></script><!-- FontAwesome 5.x.x JS -->

	<script defer src="{{ asset('assets/front/fonts/fontawesome-all.js') }}"></script>

	<script src="{{ asset('assets/front/js/main.js') }}"></script>
	<script src="//code.tidio.co/lbjhyo4cve59urv8bdl9fk37wv0msn5n.js" async></script>

// 	    <script type="text/javascript">
//             (function () {
//                 var options = {
//                     whatsapp: "+1 (385) 743‑8696", // WhatsApp number
//                     call_to_action: "Message us", // Call to action
//                     position: "right", // Position may be 'right' or 'left'
//                 };
//                 var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
//                 var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
//                 s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
//                 var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
//             })();
//         </script>

</body>

</html>
