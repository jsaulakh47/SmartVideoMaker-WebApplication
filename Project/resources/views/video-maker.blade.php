@extends('layouts.main')

@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header py-3">
						<div class="card-title align-items-start flex-column">
							<h3 class="card-label font-weight-bolder text-dark">Create Video</h3>
							<span class="text-muted font-weight-bold font-size-sm mt-1">Create custom video from images</span>
						</div>
						<div class="card-toolbar">
							<a href="{{url('/video-list')}}" class="btn btn-success mr-2">My Videos</a>
						</div>
					</div>				
					<!--begin::Form-->
					<form class="form">
						<div class="card-body" style="background: #f9f9f9;margin: 15px;">
							<div class="form-group row">
								<div class="col-lg-4">
									<div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)">
										<div class="image-input-wrapper"></div>
										<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
											<i class="fa fa-pen icon-sm text-muted"></i>
											<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
											<input type="hidden" name="profile_avatar_remove" />
										</label>
										<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
											<i class="ki ki-bold-close icon-xs text-muted"></i>
										</span>
										<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
											<i class="ki ki-bold-close icon-xs text-muted"></i>
										</span>
									</div>
								</div>
								<div class="col-lg-4">
									<label>Email:</label>
									<input type="email" class="form-control" placeholder="Enter email">
									<span class="form-text text-muted">Please enter your email</span>
								</div>
								<div class="col-lg-4">
									<label>Username:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-user"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="">
									</div>
									<span class="form-text text-muted">Please enter your username</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Contact:</label>
									<input type="email" class="form-control" placeholder="Enter contact number">
									<span class="form-text text-muted">Please enter your contact</span>
								</div>
								<div class="col-lg-4">
									<label>Fax:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-info-circle"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Fax number">
									</div>
									<span class="form-text text-muted">Please enter fax</span>
								</div>
								<div class="col-lg-4">
									<label>Address:</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Enter your address">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-map-marker"></i>
											</span>
										</div>
									</div>
									<span class="form-text text-muted">Please enter your address</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Postcode:</label>
									<div class="input-group">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-bookmark-o"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Enter your postcode">
									</div>
									<span class="form-text text-muted">Please enter your postcode</span>
								</div>
								<div class="col-lg-4">
									<label>User Group:</label>
									<div class="radio-inline">
										<label class="radio radio-solid">
										<input type="radio" name="example_2" checked="checked" value="2">
										<span></span>Sales Person</label>
										<label class="radio radio-solid">
										<input type="radio" name="example_2" value="2">
										<span></span>Customer</label>
									</div>
									<span class="form-text text-muted">Please select user group</span>
								</div>
							</div>
							<!-- begin: Example Code-->
							<div class="example-code mt-10">
								<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="example_code_html_3" role="tabpanel">

									</div>
								</div>
							</div>
							<!-- end: Example Code-->
						</div>
						<div class="card-body" style="background: #f9f9f9;margin: 15px;">
							<div class="form-group row">
								<div class="col-lg-4">
									<div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/bg/bg-9.jpg)">
										<div class="image-input-wrapper"></div>
										<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
											<i class="fa fa-pen icon-sm text-muted"></i>
											<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
											<input type="hidden" name="profile_avatar_remove" />
										</label>
										<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
											<i class="ki ki-bold-close icon-xs text-muted"></i>
										</span>
										<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
											<i class="ki ki-bold-close icon-xs text-muted"></i>
										</span>
									</div>
								</div>
								<div class="col-lg-4">
									<label>Email:</label>
									<input type="email" class="form-control" placeholder="Enter email">
									<span class="form-text text-muted">Please enter your email</span>
								</div>
								<div class="col-lg-4">
									<label>Username:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-user"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="">
									</div>
									<span class="form-text text-muted">Please enter your username</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Contact:</label>
									<input type="email" class="form-control" placeholder="Enter contact number">
									<span class="form-text text-muted">Please enter your contact</span>
								</div>
								<div class="col-lg-4">
									<label>Fax:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-info-circle"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Fax number">
									</div>
									<span class="form-text text-muted">Please enter fax</span>
								</div>
								<div class="col-lg-4">
									<label>Address:</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Enter your address">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-map-marker"></i>
											</span>
										</div>
									</div>
									<span class="form-text text-muted">Please enter your address</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-4">
									<label>Postcode:</label>
									<div class="input-group">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-bookmark-o"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Enter your postcode">
									</div>
									<span class="form-text text-muted">Please enter your postcode</span>
								</div>
								<div class="col-lg-4">
									<label>User Group:</label>
									<div class="radio-inline">
										<label class="radio radio-solid">
										<input type="radio" name="example_2" checked="checked" value="2">
										<span></span>Sales Person</label>
										<label class="radio radio-solid">
										<input type="radio" name="example_2" value="2">
										<span></span>Customer</label>
									</div>
									<span class="form-text text-muted">Please select user group</span>
								</div>
							</div>
							<!-- begin: Example Code-->
							<div class="example-code mt-10">
								<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="example_code_html_3" role="tabpanel">

									</div>
								</div>
							</div>
							<!-- end: Example Code-->
						</div>
						<a class="btn" href="#">Add New</a>												
						<div class="card-footer">
							<div class="row">
								<div class="col-lg-8">
									<button type="reset" class="btn btn-primary mr-2">Create</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</form>
					<!--end::Form-->
				</div>




	</div>
	<!--end::Container-->
</div>
@endsection
