@extends('app')

@section('content')

<div class="container" style="text-align:center">
	<h2>Please login or register</h2> <br>
	<a href="{{ url('/auth/login') }}" class="btn btn-primary">Login</a> <br><br>
	<a href="{{ url('/auth/register') }}" class="btn btn-primary">Register</a>
</div>

@endsection