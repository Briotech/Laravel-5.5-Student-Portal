@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Add New Faculty</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store_faculty') }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="firstname" class="col-md-2 control-label">First Name</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="lastname" class="col-md-2 control-label">Last Name</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="inputEmail" class="col-md-2 control-label">Email</label>

			      <div class="col-md-8">
			        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="phone" class="col-md-2 control-label">Phone Number</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-md-8 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection
