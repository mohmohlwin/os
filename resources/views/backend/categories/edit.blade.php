@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Category Edit (Form/ Old value)</h2>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="row">
 		<div class="offset-md-2  col-md-8">
 			<form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
 				@csrf
 				@method('PUT')
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="name" class="form-control" value="{{$category->name}}">
 				</div>

 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="photo" class="form-control-file">
 					<img src="{{asset($category->photo)}}" width="100" height="80">
 					<input type="hidden" name="oldphoto" value="{{asset($category->photo)}}">
 				</div>
 				
 				<input type="submit" name="" value="Create" class="btn btn-outline-primary">
 			</form>
 		</div>
 	</div>
</div>
@endsection