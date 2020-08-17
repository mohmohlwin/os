@extends('backendtemplate')

@section('content')
	<h2 class="d-inline-block my-3">Order Detail</h2>

	<table class="table table-bordered"  width="100%" cellspacing="0">
		<tr>
			<h5 class="text-center">Winter Wear</h5>
			<p class="text-center">Mandalay<br>Tel:09781881651</p>
		</tr>
		<thead>
			<tr>
				<td colspan="4">
					<div class="row">
						<div class="col-md-3">
							<h6>Casher</h6>
							<h6>Voucher</h6>
						</div>
						<div class="col-md-3">
							<h6>{{Auth::user()->name}}</h6>
							<h6>{{$order->voucherno}}</h6>
						</div>
						<div class="col-md-3">
							<h6>Date</h6>
							<h6>Order Date</h6>
						</div>
						<div class="col-md-3">
							<h6>{{$order->orderdate}}</h6>
							<h6>{{$order->orderdate}}</h6>
						</div>

					</div>
				</td>
			</tr>
			<tr>
				<th>No.</th>

				<th>Name:</th>

				<th>Price:</th>
				<th>Discount:</th>
				<th>Quantity:</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($order->items as $item)

			<tr>
				<td>{{$i++}}</td>

				<td>{{$item->name}}</td>

				<td>{{$item->price}}</td>
				<td>{{$item->discount}}</td>

				<td>{{$item->pivot->qty}}</td>
				<td>{{$item->pivot->qty*$item->price}}</td>


			</tr>
			@endforeach
			<tr>
				<td colspan="5" class="text-right">Total</td>
				<td>{{$order->total}}</td>
			</tr>

		</tbody>
	</table>


@endsection