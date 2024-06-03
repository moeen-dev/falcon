@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title fw-semibold mb-4">Create New Category</h5>
			<div class="card">
				<div class="card-body">
					<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Category Name</label>
							<input type="name" name="name" class="form-control" id="name">
							<div class="form-text">The category name must be unique.</div>
							@if($errors->has('name'))
							<small style="color: red">{{ $errors->first('name')}}</small>
							@endif
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Slug</label>
							<input type="slug" name="slug" class="form-control" id="slug">
							@if($errors->has('slug'))
							<small style="color: red">{{ $errors->first('slug')}}</small>
							@endif
						</div>
						<div class="mb-3">
							<label for="icon" class="form-label">Icon</label>
							<input type="icon" name="icon" class="form-control" id="icon">
							<div class="form-text">Icon will be :- ri-bear-smile-line </div>
							@if($errors->has('icon'))
							<small style="color: red">{{ $errors->first('icon')}}</small>
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