@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block my-3">Order List (Table)</h2>
	<a href="{{route('orders.create')}}" class="btn btn-success float-right my-3"></a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Orderdate</th>
				<th>Note</th>
				<th>Total</th>
				<th>Action</th>

			</tr>
		</thead>

		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>

				<td>{{$order->voucherno}}</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->note}}</td>
				<td>{{$order->total}}MMK</td>

				<td>
					{{-- <a href="{{route('orders.edit',$order->id)}}" class="btn btn-warning">Edit</a> --}}

					<form method="post" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		@endsection