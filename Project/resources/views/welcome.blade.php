@extends('layouts.app')
@section('content')
<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
	<span class="font-weight-bold text-dark-50">Dont have an account yet?</span>
	<a href="{{ route('register') }}" class="font-weight-bold ml-2" id="kt_login_signup">Sign Up!</a>
</div>  
<!--begin::Signin-->
<div class="login-form login-signin">
	<div class="text-center mb-10 mb-lg-20">
		<h3 class="font-size-h1">Sign In</h3>
		<p class="text-muted font-weight-bold">Enter your email and password</p>
	</div>
	<!--begin::Form-->
	<form class="form" method="POST" action="{{ route('login') }}" novalidate="novalidate" id="kt_login_signin_form">
		@csrf
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('email') is-invalid @enderror" type="email" placeholder="admin@admin.com" id="email" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus />
			@error('email')
				<div class="fv-plugins-message-container">
				<div data-field="username" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
				</div>
			@enderror
		
		</div>
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('password') is-invalid @enderror" type="password" placeholder="password" id="password" name="password" required autocomplete="off" />
			@error('password')
				<div class="fv-plugins-message-container">
				<div data-field="password" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
				</div>
			@enderror
		</div>
		<!--begin::Action-->
		<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
			@if (Route::has('password.request'))
			<a href="{{ route('password.request') }}" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Forgot Password ?</a>
			@endif
			<button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
		</div>
		<!--end::Action-->
	</form>
	<!--end::Form-->
</div>
@endsection