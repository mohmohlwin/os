@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Item Detail Page</h2>
		<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="{{asset('frontend/img/h9.jpg')}}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="">Hoodie</a>
					</h4>
					<h5>50000 MMK</h5>
					<p class="card-text">good</p>
				</div>
				<div class="card-footer">
					<a href="" class="btn btn-info btn-sm">Add to Cart</a>
					<a href="" class="btn btn-primary btn-sm">Detail</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
@endsection