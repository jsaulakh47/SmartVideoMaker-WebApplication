@extends('layouts.main')

@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="card card-custom gutter-b">
			<div class="card-body">
				<!--begin::Details-->
				<div class="d-flex mb-9">
					<!--begin: Pic-->
					<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
						<div class="symbol symbol-50 symbol-lg-120">
							<img src="assets/media/users/300_1.jpg" alt="image" />
						</div>
						<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
							<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
						</div>
					</div>
					<!--end::Pic-->
					<!--begin::Info-->
					<div class="flex-grow-1">
						<!--begin::Title-->
						<div class="d-flex justify-content-between flex-wrap mt-1">
							<div class="d-flex mr-3">
								<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">Customer Name</a>
							</div>
						</div>
						<!--end::Title-->
						<!--begin::Content-->
						<div class="d-flex flex-wrap justify-content-between mt-1">
							<div class="d-flex flex-column flex-grow-1 pr-8">
								<div class="d-flex flex-wrap mb-4">
									<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
									<i class="flaticon2-new-email mr-2 font-size-lg"></i>jason@siastudio.com</a>
								</div>
								<span class="font-weight-bold text-dark-50">I distinguish three main text objectives could be merely to inform people.</span>
								<span class="font-weight-bold text-dark-50">A second could be persuade people.You want people to bay objective</span>
							</div>
						</div>
						<!--end::Content-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Details-->
				<div class="separator separator-solid"></div>
				<!--begin::Items-->
				<div class="d-flex align-items-center flex-wrap mt-8">
					<!--begin::Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
						<span class="mr-4">
							<i class="flaticon-file display-4 text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Total Videos</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold"></span>3</span>
						</div>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
						<span class="mr-4">
							<i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Custom Videos</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold"></span>1</span>
						</div>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
						<span class="mr-4">
							<i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Url Videos</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold"></span>2</span>
						</div>
					</div>
					<!--end::Item-->

				</div>
				<!--begin::Items-->
			</div>
		</div>
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			<div class="card-header py-3">
				<div class="card-title align-items-start flex-column">
					<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
					<span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
				</div>
				<div class="card-toolbar">
					<button type="reset" class="btn btn-success mr-2">Save Changes</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Form-->
			<form class="form">
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mb-6">Customer Info</h5>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
						<div class="col-lg-9 col-xl-6">
							<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
								<div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
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
							<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">First Name</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="Nick" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Last Name</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="Bold" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Company Name</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="Loop Inc." />
							<span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
						</div>
					</div>
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone" />
							</div>
							<span class="form-text text-muted">We'll never share your email with anyone else.</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-at"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email" />
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right">Company Site</label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop" />
								<div class="input-group-append">
									<span class="input-group-text">.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>

	<!--end::Content-->								
	</div>
	<!--end::Container-->
</div>
@endsection
