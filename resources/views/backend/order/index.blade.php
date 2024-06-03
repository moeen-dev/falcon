@extends('layouts.backend')
@section('content')
<div class="container-fluid">

	<div class="row">
		<div class="col-lg-12 d-flex align-items-stretch">
			<div class="card w-100">
				<div class="card-body p-4">
					<div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
						<div class="mb-3 mb-sm-0">
							<h5 class="card-title fw-semibold">Table of all Orders Which is recieved from users.</h5>
						</div>
						<div>
							<form action="" method="">
								<input type="search" class="form-control" placeholder="Search Category">
							</form>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table text-nowrap mb-0 align-middle table-bordered">
							<thead class="text-dark fs-4">
								<tr>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">#</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Order Name</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Order Product</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Order Status</h6>
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
								
								@if($orders->count() > 0)
								@foreach($orders as $order)
								<tr>
									<td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->index + 1 }}</h6></td>
									<td class="border-bottom-0">
										<h6 class="fw-semibold mb-1">{{ $order->name }}</h6>                       
									</td>
									<td class="border-bottom-0">
										@foreach(explode(',', $order->product) as $product)
										<p class="mb-0 fw-semibold">{{ trim($product) }}</p>
										@endforeach
									</td>
									<td class="border-bottom-0">
										<form action="{{ route('order.status', $order->id) }}" method="POST">
											@csrf
											@method('PUT')
											<select name="status" id="status" class="form-select" onchange="this.form.submit()">
												<option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
												<option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
												<option value="Ready to Ship" {{ $order->status == 'Ready to Ship' ? 'selected' : '' }}>Ready to Ship</option>
												<option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
											</select>
										</form>
									</td>
									<td class="border-bottom-0">
										<div class="justify-content-center d-flex gap-2">
											<a href="#" class="btn btn-info">View Details</a>
											<form action="" method="POST">
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
									<td class="border-bottom-0 text-center text-danger" colspan="5">
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
