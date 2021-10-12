@extends('layouts.main')

@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
	<div class="card card-custom gutter-b">
		<div class="card-header">
			<div class="card-title">
				<h3 class="card-label">My Videos</h3>
			</div>
		</div>
		<div class="card-body">
			<!--begin::Example-->
			<div class="example mb-10">
				<div class="example-preview">
					<table class="table mb-5">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Type</th>
								<th scope="col">Video Link</th>
								<th scope="col">Status</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>My first video</td>
								<td>Custom</td>
								<td><a class="btn btn-success">Download</a></td>
								<td>
									<span class="label label-inline label-light-success font-weight-bold">Done</span>
								</td>
								<td><a class="btn btn-success">Preview</a><a class="btn btn-danger">Delete</a></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>http://example.com/my-blog</td>
								<td>Url</td>
								<td><a class="btn btn-success">Download</a></td>
								<td>
									<span class="label label-inline label-light-success font-weight-bold">Done</span>
								</td>
								<td><a class="btn btn-success">Preview</a><a class="btn btn-danger">Delete</a></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>http://example.com/url</td>
								<td>Url</td>
								<td></td>
								<td>
									<span class="label label-inline label-light-primary font-weight-bold">Pending</span>
								</td>
								<td><a class="btn btn-success">Preview</a><a class="btn btn-danger">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			<!--end::Example-->
		</div>
	</div>
	</div>
	<!--end::Container-->
</div>
@endsection
