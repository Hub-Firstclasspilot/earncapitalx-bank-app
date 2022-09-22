@php
$title = "Register";
@endphp

@extends('layouts.auth')

@section('body')
	<div class="main-content-wrapper medium-padding60">
		<section>
			<div class="container" style="border: 0px solid red; padding-top: 4rem;">
				<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-0 row" style="border: 0px solid blue;">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb10">
						<form class=" form--dark" method="post" action="{{ route('register') }}" style="padding: 25px;">
                            @csrf
							<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
								<h2 class="heading-title">Register</h2>
								<p>* All fields are required</p>
							</header>
							<div class="form-group label-floating is-empty">
								<label class="input-label control-label">Name <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="name" type="text">
							</div>
							<div class="form-group label-floating is-empty">
								<label class="input-label control-label">Username <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="username" type="text">
							</div>
							<div class="form-group label-floating is-empty">
								<label class="input-label control-label">Email Address <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="email" type="email" value="">
							</div>
							<div class="form-group label-floating is-empty">
								<label class="input-label control-label">Phone Number <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="mobile" type="text" value="">
							</div>
							<div class="form-group label-floating is-empty">
								<label class="input-label control-label">Password <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="password" type="password" value="">
							</div>

                            <div class="form-group label-floating is-empty">
								<label class="input-label control-label">Confirm Password <abbr class="required" title="required">*</abbr></label>
								<input class="form-control input--squared input--dark" name="password_confirmation" type="password" value="">
							</div>

                            <div class="form-group label-floating is-empty">
                                <label for="country" class="input-label control-label">Select Your Country</label>
                                <select name="country" id="country" class="form-group input--dark input--squared">
                                    <option>Select your country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if (Session::has('link'))
                            <div class="form-group label-floating is-empty">
								<label class="input-label control-label">Referral Link(Optional)</label>
								<input class="form-control input--squared input--dark" name="referral_link" type="text" value="{{ Session::get('link') }}">
							</div>
                            @else
                            <div class="form-group label-floating is-empty">
								<label class="input-label control-label">Referral Link(Optional)</label>
								<input class="form-control input--squared input--dark" name="referral_link" type="text" value="">
							</div>
                            @endif

							<div class="checkbox checkbox--style3">
								<label>
									<input type="checkbox" name="optionsCheckboxes10" checked>
									I agree with the all additional
									<a class="link-underlined" href="#">Terms and Conditions</a>
								</label>
							</div>

							<div class="form-group" style="text-align: center;">
							    <button class="btn btn--big btn--yellow full-width" type="submit">
								    Register
							    </button>
							</div>
							<div class="form-group" style="text-align: center;">
							    <a href="{{ route('login') }}">
								    Login
							    </a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
@endsection
