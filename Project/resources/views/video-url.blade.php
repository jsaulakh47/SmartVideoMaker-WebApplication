@extends('layouts.main')

@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			<div class="card-header py-3">
				<div class="card-title align-items-start flex-column">
					<h3 class="card-label font-weight-bolder text-dark">URL to Video</h3>
					<span class="text-muted font-weight-bold font-size-sm mt-1">Convert url into video</span>
				</div>
				<div class="card-toolbar">
					<a href="{{url('/video-list')}}" class="btn btn-success mr-2">My Videos</a>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Form-->
			<form class="form">
				<!--begin::Body-->
				<div class="card-body">
					<div class="form-group row">
						<label class="col-xl-2 col-lg-2 col-form-label text-right">Enter Valid URL</label>
						<div class="col-lg-6 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="http;//example.com/my-blog" />
						</div>
						<div class="col-lg-2 col-xl-2">
							<button type="reset" class="btn btn-secondary">Submit</button>
						</div>												
					</div>


				</div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>
	</div>
	<!--end::Container-->
</div>
@endsection
