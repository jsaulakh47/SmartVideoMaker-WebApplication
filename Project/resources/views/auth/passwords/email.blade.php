@extends('layouts.app')

@section('content')
<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
	<a href="{{ route('login') }}" class="font-weight-bold ml-2" id="kt_login_signup">Sign In!</a>
</div>
<!--begin::Forgot-->
<div class="login-form login-forgot">
	<div class="text-center mb-10 mb-lg-20">
		<h3 class="font-size-h1">Forgotten Password ?</h3>
		<p class="text-muted font-weight-bold">Enter your email to reset your password</p>
	</div>
	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif		
	<!--begin::Form-->
	<form class="form" method="POST" action="{{ route('password.email') }}" novalidate="novalidate" id="kt_login_forgot_form">
		@csrf

		<div class="form-group">
			<input class="form-control form-control-solid h-auto py-5 px-6 @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror	
		</div>
		<div class="form-group d-flex flex-wrap flex-center">
			<button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Forgot-->

@endsection
