@extends('layouts.app')
@section('content')
<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
	<a href="{{ route('login') }}" class="font-weight-bold ml-2" id="kt_login_signup">Sign In!</a>
</div>
<!--begin::Signup-->
<div class="login-form login-signup">
	<div class="text-center mb-10 mb-lg-20">
		<h3 class="font-size-h1">Sign Up</h3>
		<p class="text-muted font-weight-bold">Enter your details to create your account</p>
	</div>
	<!--begin::Form-->
	<form class="form" method="POST" action="{{ route('register') }}" novalidate="novalidate" id="kt_login_signup_form">
		@csrf
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
			@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror								
		
		</div>
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />
		</div>
		<div class="form-group d-flex flex-wrap flex-center">
			<button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
			<button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Signup-->
@endsection
