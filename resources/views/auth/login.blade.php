@php
    $title = 'Login';
@endphp

@extends('layouts.auth')

@section('body')
	<div class="main-content-wrapper medium-padding60">
        <section>
            <div class="container" style="border: 0px solid red;">
				<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-0 row " style="border: 0px solid blue;">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb10">
                        @if ($errors)
                            <div style="color: red">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
						<form class="form--dark" method="post" action="{{ route('login') }}" style="padding: 25px;margin-right: 15px;">
                            @csrf
							<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
								<h2 class="heading-title">Login</h2>
								<p>* All fields are required</p>
							</header>
							<label for="name3" class="input-label"> Email <abbr class="required" title="required">*</abbr></label>
							<div class="input-with-icon input-icon--right">
								<input class="input--dark input--squared" id='name3' name="email" placeholder="Email" type="email">
								<svg class="woox-icon icon-black-male-user-symbol-2">
									<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-black-male-user-symbol-2') }}"></use>
								</svg>
							</div>
							<label for="password3" class="input-label">Password<abbr class="required" title="required">*</abbr></label>
							<div class="input-with-icon input-icon--right">
								<input class="input--dark input--squared" id='password3' name="password" placeholder="" type="password">
								<svg class="woox-icon icon-padlock">
									<use xlink:href="{{ asset('assets/front/svg-icons/sprites/icons.svg#icon-padlock') }}"></use>
								</svg>
							</div>
							<div class="forgot-block">
								<div class="checkbox checkbox--style5">
									<label>
										<input type="checkbox" name="optionsCheckboxes10" checked>
										Remember me
									</label>
								</div>
								<a class="link-underlined" href="#">Forgot Password?</a>
							</div>

                            <div class="form-group" style="text-align: center;">
							<button type="submit" class="btn btn--medium btn--yellow mx-auto" style="margin-bottom: 10px;">
								Login
							</button>
                            </div>
							<div class="col-12" style="text-align: center;">
				            <a href="{{ route('register') }}" >
								Create an Account
							</a>
				</div>
						</form>
					</div>
				</div>
				
			</div>
		</section>
	</div>
@endsection
