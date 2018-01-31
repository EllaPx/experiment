@extends('layouts.master')

@section('title')
   Welcome
@endsection

@section('content')

@if(count($errors)>0)
<div class="row">
	<div class="col-md-6">
		<ul>
			@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>

			@endforeach
		</ul>
	</div>
</div>
@endif

<div class="row">
	<div class="col-md-6">
		<h3>Sign Up</h3>
		<form action="{{ route('signup') }}" method="post">
			<div class="form-group">
				<label for="email">Your Email</label>
				<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
			</div>
			<div class="form-group">
				<label for="first_name">Your First Name</label>
				<input class="form-control" type="text" name="firstname" id="email" value="{{ Request::old('firstname') }}">
			</div>
			<div class="form-group">
				<label for="password">Your Password</label>
				<input class="form-control" type="password" name="password" id="email" value="{{ Request::old('password') }}">
			</div>
			<div class="form-group">
				<label for="password">Retype Password</label>
				<input class="form-control" type="password" name="password" id="pass" >
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
		
	</div>
	<div class="col-md-6">
		<h3>Sign In</h3>
		<form action="{{ route('signin') }}" method="post">
			<div class="form-group">
				<label for="email">Your Email</label>
				<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
			</div>
			
			<div class="form-group">
				<label for="password">Your Password</label>
				<input class="form-control" type="password" name="password" id="email" value="{{ Request::old('password')}}" >
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
		
	</div>
</div>



@endsection