@extends('app')
@section('content')

@if($errors->any())
	<div class="alert alert-danger">
		{{$errors->first()}}
	</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
	{!! csrf_field() !!}

	<div class="form-group">
		<label class="col-md-4 control-label">Minimum Team Size</label>
		<div class="col-md-6">
			<input type="integer" class="form-control" name="min" value="3" placeholder="3">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Maximum Team Size</label>
		<div class="col-md-6">
			<input type="integer" class="form-control" name="max" value="4" placeholder="4">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary btn-block" value="generate" onclick="return confirm('Are you sure you want to generate new teams?');">
				Generate Teams
			</button>
		</div>
	</div>
</form>

@endsection