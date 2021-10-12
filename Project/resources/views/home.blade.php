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
							<p class="text-inverse-danger my-6">Boost marketing &amp; sales
							<br>through product confidence.</p>
							<a href="{{url('/video-maker')}}" class="btn btn-primary font-weight-bold py-2 px-6">Create</a>
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
							<p class="text-inverse-danger my-6">Boost marketing &amp; sales
							<br>through product confidence.</p>
							<a href="{{url('/video-url')}}" class="btn btn-primary font-weight-bold py-2 px-6">Create</a>
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
