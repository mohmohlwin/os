@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Checkout Page</h2>
		<div id="checkout_body">
			<div class="container my-3 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-8">
						<h3 class="py-3">Check Out</h3>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Item One</td>
										<td>50000 MMK</td>
										<td>2</td>
										<td>100000 MMK</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Item Two</td>
										<td>40000 MMK</td>
										<td>2</td>
										<td>80000 MMK</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection