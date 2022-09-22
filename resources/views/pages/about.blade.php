@extends('layouts.front')

@section('content')
    <div class="main-content-wrapper">
	<section data-settings="particles-1" class="responsive-align-center">
		<div class="container">
			<div class="row medium-padding80 align-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">WHY CHOOSE US?</div>
						<div class="heading-text">Earncapitalx is an award winning cryptocurrency broker, providing trading services and facilities to both retail and institutional clients. Through its policy of providing the best possible trading conditions to its clients and allowing both scalpers and traders using expert advisors unrestricted access to its liquidity.

                            Earncapitalx has positioned itself as the cryptocurrency broker of choice for traders worldwide who look to discover new coins to invest in and take advantage of the uprising of digitalization of currencies.</div>
					</header>
					<a data-scroll href="{{ route('register') }}" class="btn btn--small btn--yellow">Create Account</a>
				</div>
			</div>
		</div>
		<hr class="divider">
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
									Total Earnodot FX Tokens:
									<div class="price-value">6803.0122</div>
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
    								<div class="heading-text">Earncapitalx offers various accounts types, trading software and tools to facilitate individuals and institutional customers to trade cryptocurrency and Derivatives online. All Retail, Affiliates and White Label clients have the opportunity to access various new coins and their liquidity via state of the art automated trading platforms.

                                        Earncapitalx provides an unparalleled variety of account options that clients can select to enjoy a tailored trading experience that perfectly suits their needs. Coupled with superior trading conditions and lightning fast execution and payout system.
                                        
                                        Earncapitalx also provides all the tools and services needed for clients of any level to realize their trading ambitions in cryptocurrency.
                                        </div>
    							</header>
    						</div>
    					</div>
    				</div>
    				<hr class="divider">
    			</div>
    
    		</section>

</div>
@endsection

