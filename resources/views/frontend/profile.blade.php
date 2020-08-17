@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		<h2>Profile Page</h2>
		<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5">
          	<img src="{{asset('frontend/img/profile.jpg')}}"width="370" height="400">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Your Profile!</h1>
              </div>
                <label><b>NAME:</b></label> Mona <br>
                <label><b>Address:</b></label> Mandalay <br>
                <label><b>Email:</b></label> mona@gmail.com
           
          </div>
        </div>
      </div>
    </div>
	</div>
@endsection