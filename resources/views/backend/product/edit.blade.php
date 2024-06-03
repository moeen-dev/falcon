@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title fw-semibold mb-4">Create New Category</h5>
			<div class="card">
				<div class="card-body">
					<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="mb-5 col-lg-6">
								<label for="title" class="form-label">Product Title*</label>
								<input type="text" name="title" class="form-control" id="title" value="{{ $product->title }}">
								<div class="form-text">Product title must be unique & required.</div>
								@if($errors->has('title'))
								<small style="color: red">{{ $errors->first('title')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-6">
								<label for="slug" class="form-label">Slug*</label>
								<input type="slug" name="slug" class="form-control" id="slug" value="{{ $product->slug }}">
								@if($errors->has('slug'))
								<small style="color: red">{{ $errors->first('slug')}}</small>
								@endif
							</div>
						</div>
						
						<div class="row">
							<div class="mb-5 col-lg-6">
								<label for="sub_category_id" class="form-label">Sub Category*</label>
								<select name="sub_category_id" id="sub_category_id" class="form-select">
									<option value="" selected disabled>-- Select SubCategory --</option>
									@foreach($sub_categories as $sub_category)
									<option value="{{ $sub_category->id }}" {{ $product->sub_category_id == $sub_category->id ? 'selected' : '' }}>{{ $sub_category->name }}</option>
									@endforeach
								</select>
								@if($errors->has('sub_category_id'))
								<small style="color: red">{{ $errors->first('sub_category_id')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-6">
								<label for="off_price" class="form-label">Off Price</label>
								<input type="off_price" name="off_price" class="form-control" id="off_price" value="{{ $product->off_price }}">
								<div class="form-text">Off Price will be on percentage: %</div>
								@if($errors->has('off_price'))
								<small style="color: red">{{ $errors->first('off_price')}}</small>
								@endif
							</div>
						</div>

						<div class="row">
							<div class="mb-5 col-lg-6">
								<label for="current_price" class="form-label">Current Price*</label>
								<input type="current_price" name="current_price" class="form-control" id="current_price" value="{{ $product->current_price }}">
								<div class="form-text">Current Price must be less than Normal Price.</div>
								@if($errors->has('current_price'))
								<small style="color: red">{{ $errors->first('current_price')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-6">
								<label for="normal_price" class="form-label">Normal Price*</label>
								<input type="normal_price" name="normal_price" class="form-control" id="normal_price" value="{{ $product->normal_price }}">
								<div class="form-text">Normal Price must be greater than current price. </div>
								@if($errors->has('normal_price'))
								<small style="color: red">{{ $errors->first('normal_price')}}</small>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="mb-5 col-lg-3">
								<label for="image1" class="form-label">Image 1*</label>
								<input type="file" name="image1" class="form-control" id="image1" data-default-file="{{ url('upload/images', $product->image1)}}">
								<div class="form-text">This image is required. </div>
								@if($errors->has('image1'))
								<small style="color: red">{{ $errors->first('image1')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-3">
								<label for="image2" class="form-label">Image 2*</label>
								<input type="file" name="image2" class="form-control" id="image2" data-default-file="{{ url('upload/images', $product->image2)}}">
								<div class="form-text">This image is required. </div>
								@if($errors->has('image2'))
								<small style="color: red">{{ $errors->first('image2')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-3">
								<label for="image3" class="form-label">Image 3*</label>
								<input type="file" name="image3" class="form-control" id="image3" data-default-file="{{ url('upload/images', $product->image3)}}">
								<div class="form-text">This image is required. </div>
								@if($errors->has('image3'))
								<small style="color: red">{{ $errors->first('image3')}}</small>
								@endif
							</div>
							<div class="mb-5 col-lg-3">
								<label for="image4" class="form-label">Image 4</label>
								<input type="file" name="image4" class="form-control" id="image4" data-default-file="{{ url('upload/images', $product->image4)}}">
								<div class="form-text">This image is nullable. </div>
								@if($errors->has('image4'))
								<small style="color: red">{{ $errors->first('image4')}}</small>
								@endif
							</div>
						</div>

						<div class="mb-5 col-lg-12">
							<label for="information" class="form-label">Product Information*</label>
							<textarea rows="10" cols="30" type="information" name="information" class="summernote" id="information">{{ $product->information }}</textarea>
							<div class="form-text">Product Information field is required</div>
							@if($errors->has('information'))
							<small style="color: red">{{ $errors->first('information')}}</small>
							@endif
						</div>

						<div class="mb-5 col-lg-12">
							<label for="details" class="form-label">Product Details*</label>
							<textarea rows="10" cols="30" type="details" name="details" class="summernote" id="details">{{ $product->details }}</textarea>
							<div class="form-text">Product details field is required. </div>
							@if($errors->has('details'))
							<small style="color: red">{{ $errors->first('details')}}</small>
							@endif
						</div>

						<div class="d-grid col-6 mx-auto mt-3">
							<button class="btn btn-primary" type="Submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')

<script>
	$("#information, #details").ready(function() {
		$('#information, #details').summernote();
		$('.summernote').dropdown();
	});




	$("#title").keyup(function() {
		var Text = $(this).val();
		Text = Text.toLowerCase();
		Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
		$("#slug").val(Text);
	});

	$('#image1, #image2, #image3, #image4').dropify();
</script>

@endsection