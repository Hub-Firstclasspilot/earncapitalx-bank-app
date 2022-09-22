@extends('layouts.front')


@section('content')
    <div class="main-content-wrapper" style="z-index: 10;">
		<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js medium-padding30 responsive-align-center">
			<div class="container site-header">
                <canvas id="can"></canvas>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
                            <h1 class="weight-thin no-margin">Block-Chain <br> and</h1>
                            <h2 class="weight-thin no-margin">Smart Contract Investments</h2>
						</header>
						<div class="btn-wrapper">
                            <a class="btn btn--yellow btn--small" data-scroll href="{{ route('register') }}">
								<span>Register</span>
							</a>
							<a class="btn btn--yellow btn--small btn--mb-2" data-scroll href="{{ route('login') }}">Login</a>
						</div>
                        <div class="img-container">
                            <img src="{{ asset('assets/front/img/if_Bitcoin_2745023.png') }}" alt="Bitcoin">
                            <img src="{{ asset('assets/front/img/mastercard.png') }}" alt="Mastercard">
                            <img src="{{ asset('assets/front/img/paypal.png') }}" alt="Paypal">
                            <img src="{{ asset('assets/front/img/visa.png') }}" alt="Visa">
                        </div>
					</div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-top:2%;">
                        <img class="responsive-width-50" src="{{ asset('assets/front/img/phone.png') }}" alt="phone">
                    </div>
				</div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 mx-auto my-4">
                        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
                        <div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
                    </div>
                </div>
			</div>
		</section>

		<section class="medium-padding20 responsive-align-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
							<div class="heading-sup-title">What is Currency Trading?</div>
							<h2 class="heading-title weight-normal">Forex Trading -
								<span class="weight-bold"> The Exchange of Currencies</span>
							</h2>
							<div class="heading-text">Currency trading, also known as Forex trading, is the exchange of currencies between two parties at an agreed price. The trading parties may be financial institutions, multi-national corporations, banks, central banks, hedge funds, money changers, insurance companies, speculators, or individual traders.
							</div>
						</header>

						<p>Currency trading is done in pairs. A currency pair consists of a base and a quote currency – for example, the currency pair of EUR/USD consists of EUR, which represents the base currency, and USD which represents the quote currency. The exchange rate of EUR/USD at 1.1630 simply means that to own one euro, you need the equivalent of 1.1630 in US dollars.
						</p>

						<div class="btn-market-wrap mt60">
							<a href="{{ route('main.about') }}" class="btn btn--about btn--medium">
							    About Earncapitalx
							</a>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt30">
						<img class="responsive-width-50" src="{{ asset('assets/front/img/phone.png') }}" alt="phone">
					</div>
				</div>
			</div>
		</section>

		<section class="bg-dotted-map">
			<div class="container">
				<div class="row medium-padding100 align-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<img class="primary-dots mb30" src="{{ asset('assets/front/img/dots.png') }}" alt="dots">

						<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
							<h2 class="heading-title weight-normal">Life in the
								<span class="weight-bold">digital world</span>
							</h2>
							<div class="heading-text">Earncapitalx Technology</div>
						</header>

						<div class="counters">
							<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-counter-item">
									<div class="counter-numbers counter">
										<span data-speed="2000" data-refresh-interval="3" data-to="6386" data-from="2"></span>
									</div>
									<h4 class="counter-title">Market price</h4>
									<p class="counter-text">we will show how the supply and demand for the two currencies that make up a currency pair move its market price from moment to moment.</p>
									<div class="counter-line"></div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-counter-item">
									<div class="counter-numbers counter">
										<span data-speed="2000" data-refresh-interval="3" data-to="16" data-from="2">16</span>
										<div class="units">mb</div>
									</div>
									<h4 class="counter-title">Average block size</h4>
									<p class="counter-text">A micro lot is 1000 worth of a given currency, a mini lot is 10,000, and a standard lot is 100,000. This is different than when you go to a bank and want $450 exchanged for your trip.</p>
									<div class="counter-line"></div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-counter-item">
									<div class="counter-numbers counter">
										<span data-speed="2000" data-refresh-interval="3" data-to="8327" data-from="2"></span>
										<div class="units"></div>
									</div>
									<h4 class="counter-title">Clients worldwide</h4>
									<p class="counter-text">What distinguishes ForexTime (FXTM) as a forex company is our ability to recognize our clients' individual needs and respond to them in the best way possible.</p>
									<div class="counter-line"></div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-counter-item">
									<div class="counter-numbers counter">
										<span data-speed="2000" data-refresh-interval="3" data-to="2000" data-from="2"></span>
										<div class="units">+</div>
									</div>
									<h4 class="counter-title">Transactions</h4>
									<p class="counter-text">Foreign exchange transactions can take place on the foreign exchange market, also known as the Forex Market.</p>
									<div class="counter-line"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-1">

			<div class="container">
				<div class="row medium-padding80">
					<div class="crumina-module crumina-featured-block">
						<div class="image-block">
							<img src="{{ asset('assets/front/img/pc.png') }}" alt="phone">
						</div>
						<div class="text-block">
							<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
								<h2 class="heading-title weight-normal">Forex Trading Signals
									<span class="weight-bold">Who are Forex Signal Providers?</span>
								</h2>
								<div class="heading-text">A forex signal is a suggested entry or exit point for a forex trade, usually with a specific price and time indicated. Forex signals can be obtained from either specialist companies or a number of knowledgeable and experienced traders.</div>
							</header>
						</div>
					</div>
				</div>
				<hr class="divider">
			</div>

		</section>

    <section>
			    <div class="container py-5">
        <div class="row text-center">
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/kimberly-sophia.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Annette S. Gaffney</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/catherine-tessy.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Valerie H. Robinson</h5><span class="small text-uppercase text-muted">VP Forex Operations</span>
            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/rose-williams.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Carole T. Morrow</h5><span class="small text-uppercase text-muted">CFO</span>
              </ul>
            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/caroline-jenny.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Jeanette E. Peden</h5><span class="small text-uppercase text-muted">VP Forex Operations</span>
              </ul>
            </div>
          </div>
          <!-- End-->

        </div>

        <div class="row text-center my-4 d-flex justify-content-center">
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/jamey-pophom.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Joseph D. Holcomb</h5><span class="small text-uppercase text-muted">CTO</span>
              </ul>
            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/danielle-weinberg.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Gloria M. Hoskins</h5><span class="small text-uppercase text-muted">Analyst</span>
              </ul>
            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('assets/front/img/mark-brian.jpeg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" style="width: 200px; height: 200px;">
              <h5 class="mb-0 text-dark">Manuel S. Harris</h5><span class="small text-uppercase text-muted">Head of Operations</span>
              </ul>
            </div>
          </div>
          <!-- End-->
        </div>
    </div>
    </section>

		<section class="medium-padding80 responsive-align-center">
			<div class="container">
				<div class="row bg-2">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb30">
						<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
							<img class="primary-dots mb30" src="{{ asset('assets/front/img/dots.png') }}" alt="dots">
							<h2 class="heading-title weight-normal">Hurry to invest
								<span class="weight-bold">in Fx trading</span>
							</h2>
							<div class="heading-text">We trade on
								Forex, Stocks, ETFs, BINARY OPTIONS and Cryptocurrency Trading.</div>
						</header>
						<p>TarineStream is an online trading platform and one of the fastest online exchanging brands in the world with secure services. We trade on Forex, Stocks, ETFs, Binary Options and Cryptocurrency Trading. Founded since 2015, we've been providing quality trading services and also enlighten our customers as best as we can regardless of their level of competence with cryptocurrencies.
						</p>
						<div class="crumina-module crumina-counter-item counter--icon-left mt60">
							<svg class="woox-icon">
								<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-group') }}"></use>
							</svg>
							<div class="counter-content">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="68000" data-from="2">68000</span>
									<div class="units">+</div>
								</div>
								<h4 class="counter-title">ICO Participants</h4>
							</div>
						</div>

					</div>
					<div class="col-lg-6 col-md-12 col-lg-offset-0 col-sm-12 col-xs-12">
						<div class="widget w-distribution-ends countdown-bg1">
							<h5 class="title">Distribution
								<br>Ends In:
							</h5>

							<div class="crumina-countdown-item">
								<div class="crumina-countdown" data-date="2019-01-01 00:00:00"></div>
							</div>

							<a href="{{ route('login') }}" class="btn btn--medium btn--yellow">
								Get Started
							</a>

							<div class="crumina-module crumina-skills-item skills-item--bordered">
								<div class="skills-item-info">
									<span class="skills-item-title">$6M<span class="skills-item-count c-primary"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="50" data-from="0"></span><span class="units">m</span></span></span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary-color" style="width: 50%"></span>
								</div>
								<span class="add-info">
									<span><span class="c-link-color">Softcap</span> in 976 days</span>
									<span class="c-link-color">Hardcap</span>
								</span>
							</div>

							<div class="price-wrap">
								<div class="token-price">
									Token Price:
									<div class="price-value">$0.0023</div>
								</div>
								<div class="token-total">
									Total Earncapitalx Tokens:
									<div class="price-value">6803.0122</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
