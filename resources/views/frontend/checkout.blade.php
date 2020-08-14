@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">

	<div id="checkout_body">
		<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3 text-center">Your Cart</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Photo</th>
							<th>Name</th>
							<th>Price</th>
							<th>Qty</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>


					</tbody>

				</table>
				<div>
					<a href="{{route('homepage')}}" class="btn btn-success">Continue Shopping</a>
					<textarea class="notes" placeholder="Your note here!"></textarea>
					@auth
					<a href="#" class="btn btn-primary float-right buy_now">Checkout</a>
					@else
					<a href="{{route('login')}}" class="btn btn-primary float-right">Login To Checkout</a>
					@endauth
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
	@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">

	</script>
	@endsection