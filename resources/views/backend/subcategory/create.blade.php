@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title fw-semibold mb-4">Create New SubCategory</h5>
			<div class="card">
				<div class="card-body">
					<form action="{{ route('sub-category.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Sub Category Name</label>
							<input type="name" name="name" class="form-control" id="name">
							<div class="form-text">The sub category name must be unique.</div>
							@if($errors->has('name'))
							<small style="color: red">{{ $errors->first('name')}}</small>
							@endif
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Sub Category Slug</label>
							<input type="slug" name="slug" class="form-control" id="slug">
							@if($errors->has('slug'))
							<small style="color: red">{{ $errors->first('slug')}}</small>
							@endif
						</div>
						<div class="mb-3">
							<label for="category_id" class="form-label">Select Category</label>
							<select name="category_id" id="category_id" class="form-select">
								<option value="" selected disabled>-- Select Category --</option>
								@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
							@if($errors->has('category_id'))
							<small style="color: red">{{ $errors->first('category_id')}}</small>
							@endif
						</div>
						<button class="btn btn-primary" type="Submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$("#name").keyup(function() {
		var Text = $(this).val();
		Text = Text.toLowerCase();
		Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
		$("#slug").val(Text);
	});
</script>
@endsection