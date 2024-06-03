@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 d-flex align-items-stretch">
			<div class="card w-100">
				<div class="card-body p-4">
					<div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
						<div class="mb-3 mb-sm-0">
							<h5 class="card-title fw-semibold">Table of all subcategory of this shop.</h5>
						</div>
						<div>
							<form action="" method="">
								<input type="search" class="form-control" placeholder="Search SubCategory">
							</form>
						</div>
					</div>
					<div class="d-flex mb-4">
						<a href="{{ route('sub-category.create') }}" class="btn btn-primary">Create New Sub Category</a>
					</div>
					<div class="table-responsive">
						<table class="table text-nowrap mb-0 align-middle table-bordered">
							<thead class="text-dark fs-4">
								<tr>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">#</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Sub Category Name</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Sub Category Slug</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Category Name</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Action</h6>
									</th>
								</tr>
							</thead>
							<tbody>
								@if (session('success'))
								<div class="alert alert-success" role="alert">
									{{ session('success') }}
								</div>
								@endif
								@if (session('error'))
								<div class="alert alert-danger" role="alert">
									{{ session('error') }}
								</div>
								@endif
								@if($sub_categories->count() > 0)
								@foreach($sub_categories as $sub_category)
								<tr>
									<td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->index + 1 }}</h6></td>
									<td class="border-bottom-0">
										<h6 class="fw-semibold mb-1">{{ $sub_category->name }}</h6>                       
									</td>
									<td class="border-bottom-0">
										<p class="mb-0 fw-semibold">{{ $sub_category->slug }}</p>
									</td>
									<td class="border-bottom-0">
										<p class="mb-0 fw-semibold">{{ $sub_category->category['name'] }}</p>
									</td>
									<td class="border-bottom-0">
										<div class="justify-content-center d-flex gap-2">
											<a href="{{ route('sub-category.edit', $sub_category->id) }}" class="btn btn-info">Edit</a>
											<form action="{{ route('sub-category.destroy', $sub_category->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete it?')">Delete</button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td class="border-bottom-0 text-center" colspan="5">
										<p class="mb-0 fw-normal">No Data Fount!</p>
									</td>
								</tr>
								@endif                      
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection