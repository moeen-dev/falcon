@extends('layouts.backend')
@section('content')
<div class="container-fluid">

	<div class="row">
		<div class="col-lg-12 d-flex align-items-stretch">
			<div class="card w-100">
				<div class="card-body p-4">
					<div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
						<div class="mb-3 mb-sm-0">
							<h5 class="card-title fw-semibold">Table of all products of this shop.</h5>
						</div>
						<div>
							<form action="" method="">
								<input type="search" class="form-control" placeholder="Search Product">
							</form>
						</div>
					</div>
					<div class="d-flex mb-4">
						<a href="{{ route('product.create') }}" class="btn btn-primary">Create New Product</a>
					</div>
					<div class="table-responsive">
						<table class="table text-nowrap mb-0 align-middle table-bordered">
							<thead class="text-dark fs-4">
								<tr>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">#</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Action</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Sub Category</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Products Image</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Stock Status</h6>
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
								@if($products->count() > 0)
								@foreach($products as $product)
								<tr>
									<td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->index + 1 }}</h6></td>
									<td class="border-bottom-0">
										<h6 class="fw-semibold mb-1">{{ $product->SubCategory['name'] }}</h6>                       
									</td>
									<td class="border-bottom-0">
										<img style="width: 80px; height: 80px" src="{{ url('upload/images', $product->image1)}}">
										<img style="width: 80px; height: 80px" src="{{ url('upload/images', $product->image2)}}">
									</td>
									<td class="border-bottom-0">
										<h6 class="fw-semibold mb-1">{{ $product->current_price }}</h6>                       
									</td>
									<td class="border-bottom-0">
										<form action="{{ route('product.status', $product->id) }}" method="POST">
											@csrf
											@method('PUT')
											<select name="is_stock" id="is_stock" class="form-select" onchange="this.form.submit()">
												<option value="1" {{ $product->is_stock == 1 ? 'selected' : '' }}>In Stock</option>
												<option value="0" {{ $product->is_stock == 0 ? 'selected' : '' }}>Out of Stock</option>
											</select>
										</form>
									</td>
									<td class="border-bottom-0">
										<div class="justify-content-center d-flex gap-2">
											<a href="{{ route('product.edit', $product->id) }}" class="btn btn-info">Edit</a>

											<form action="{{ route('product.destroy', $product->id) }}" method="POST">
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