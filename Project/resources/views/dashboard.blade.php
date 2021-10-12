@extends('layouts.main')

@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-xl-4">
				<!--begin::Engage Widget 2-->
				<div class="card card-custom card-stretch gutter-b">
					<div class="card-body d-flex p-0">
						<div class="flex-grow-1 bg-warning p-8 card-rounded flex-grow-1 bgi-no-repeat" >
							<h4 class="text-inverse-danger mt-2 font-weight-bolder">Create Custom Video</h4>
							<p class="text-inverse-danger my-6">For Creating Custom Video,
							<br>click on following create button.</p>
							<a href="video-maker.html" class="btn btn-primary font-weight-bold py-2 px-6">Create</a>
						</div>
					</div>
				</div>
				<!--end::Engage Widget 2-->
			</div>
			<div class="col-xl-4">
				<!--begin::Engage Widget 2-->
				<div class="card card-custom card-stretch gutter-b">
					<div class="card-body d-flex p-0">
						<div class="flex-grow-1 bg-danger p-8 card-rounded flex-grow-1 bgi-no-repeat" >
							<h4 class="text-inverse-danger mt-2 font-weight-bolder">Convert URL into Video</h4>
							<p class="text-inverse-danger my-6">For URL to Video,
							<br>click on following create button.</p>
							<a href="video-url.html" class="btn btn-primary font-weight-bold py-2 px-6">Create</a>
						</div>
					</div>
				</div>
				<!--end::Engage Widget 2-->
			</div>									
		</div>
	</div>
	<!--end::Container-->
</div>
@endsection
