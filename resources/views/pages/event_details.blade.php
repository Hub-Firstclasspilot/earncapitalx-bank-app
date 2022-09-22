@extends('layouts.front')

@section('content')
    <div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
		<div class="container">
			<div class="row align-center mb60">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">EVENTS</div>
						<h2 class="heading-title heading--half-colored">Is your business ready for a production blockchain rollout?</h2>
						<div class="heading-text"></div>
					</header>
					<a data-scroll href="#details" class="btn btn--large btn--secondary btn--transparent">Details</a>
				</div>
			</div>
		</div>
	</section>

	<section class="pt80">
		<div class="container">
			<div id="details" class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="event-details-thumb bg-event8">
						<div class="overlay"></div>
						<div class="crumina-countdown-item">
							<div class="crumina-countdown" data-date="2019-01-01 00:00:00"></div>
						</div>

						<div class="event-venue event-venue--details has-popup">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12" data-mh="equal-height">
									<div class="event-date">
										<svg class="woox-icon icon-school-calendar">
											<use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-school-calendar')}}"></use>
										</svg>
										March 16, 2021
									</div>
									<div class="event-date">
										<svg class="woox-icon icon-placeholder">
											<use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-placeholder')}}"></use>
										</svg>
										Juarez & Associates, 12139 National Boulevard, Los Angeles, CA, U.S.
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12" data-mh="equal-height">
									<div class="event-date">
										<svg class="woox-icon icon-circular-clock">
											<use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-circular-clock')}}"></use>
										</svg>
										7:30 PM to 9:30 PM
									</div>
									<div class="event-date">
										<svg class="woox-icon icon-telephone">
											<use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-telephone')}}"></use>
										</svg>
										8 800 567.890.11 (Mon-Fri 9am-6pm)
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12" data-mh="equal-height">
									<div class="author-block">
										<div class="avatar avatar60">
											<img src="{{ asset('assets/front/img/author2.jpg') }}" alt="avatar">
										</div>
										<div class="author-content">
											<a href="#" class="author-name">Philip Demarco</a>
											<div class="author-prof">speaker</div>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-12" data-mh="equal-height">
									<a href="#" class="btn btn--medium btn--primary btn--transparent btn--with-icon btn--icon-right js-open-popup js-body-overlay">
										Join Now
										<svg class="woox-icon icon-arrow-right"><use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-arrow-right')}}"></use></svg>
									</a>
									<div class='window-popup register-event'>
										<div class="mCustomScrollbar" data-mcs-theme="dark">
											<div class='content'>
												<a class='js-open-popup js-body-overlay popup-close' href='#'>
													<svg class="woox-icon icon-close"><use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-close')}}"></use></svg>
												</a>
												<form class="register-form form--dark" method="post" action="#">
													<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
														<h2 class="heading-title">Register</h2>
														<p>* All fields are required</p>
													</header>
													<div class="form-group label-floating is-empty">
														<label class="input-label control-label">Name <abbr class="required" title="required">*</abbr></label>
														<input class="form-control input--squared input--dark" name="name" type="text">
													</div>
													<div class="form-group label-floating is-empty">
														<label class="input-label control-label">Email Address <abbr class="required" title="required">*</abbr></label>
														<input class="form-control input--squared input--dark" type="email" value="">
													</div>
													<div class="form-group label-floating is-empty">
														<label class="input-label control-label">Phone Number <abbr class="required" title="required">*</abbr></label>
														<input class="form-control input--squared input--dark" type="text" value="">
													</div>
													<div class="form-group label-floating is-empty">
														<label class="input-label control-label">Company Name <abbr class="required" title="required">*</abbr></label>
														<input class="form-control input--squared input--dark" type="text" value="">
													</div>

													<div class="checkbox checkbox--style3">
														<label>
															<input type="checkbox" name="optionsCheckboxes10" checked>
															I agree with the all additional
															<a class="link-underlined" href="#">Terms and Conditions</a>
														</label>
													</div>

													<button class="btn btn--large btn--green-light btn--with-icon btn--icon-right full-width">
														SUBSCRIBE NOW
														<svg class="woox-icon icon-arrow-right"><use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-arrow-right')}}"></use></svg>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="medium-padding120">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h3 heading--with-decoration">
						<h3 class="heading-title">Event description</h3>
					</header>
					<!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" >
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                "width": 600,
                                "height": 490,
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en"
                                }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->

				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="widget w--help bg-help">
						<h3 class="title">How can we <span class="weight-bold">help you?</span></h3>
						<p class="text">
							contact us via live chat or our customer service email address.
						</p>
						<a href="011_contacts.php" class="btn btn--large btn--secondary btn--with-icon btn--icon-left">
							<svg class="woox-icon icon-telephone"><use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-telephone')}}"></use></svg>
							Contacts
						</a>
					</div>

					<a href="#" class="btn btn--x-large btn--primary btn--transparent btn--with-icon btn--icon-left full-width mb60 mt60">
						<svg class="woox-icon icon-adobe-reader-symbol"><use xlink:href="{{asset('assets/front/svg-icons/sprites/icon.svg#icon-adobe-reader-symbol')}}"></use></svg>
						Company Presentation
					</a>
                    <!--... Google map -->
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
