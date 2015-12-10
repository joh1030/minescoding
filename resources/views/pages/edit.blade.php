@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Edit</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/users/'. $user->id .'/edit') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder='{{$user->name}}'>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="{{$user->email}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Style</label>
							<div class="col-md-6">
								<select name="style">
									<option selected disabled hidden value=""></option>
									<option value="Social" <?php if($user_info->style == "Social"){echo("selected");}?> >Social</option>
									<option value="Competitive"  <?php if($user_info->style == "Competitive"){echo("selected");}?> >Competitive</option>
									<option value="Any" <?php if($user_info->style == "Any"){echo("selected");}?> >Any</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Language 1</label>
							<div class="col-md-6">
								<select name="lang_one">
									<option selected disabled hidden value=""></option>
									<option value="Python" <?php if($user_info->lang_one == "Python"){echo("selected");}?>>Python</option>
									<option value="Java" <?php if($user_info->lang_one == "Java"){echo("selected");}?>>Java</option>
									<option value="C/C++" <?php if($user_info->lang_one == "C/C++"){echo("selected");}?>>C/C++</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Language 2</label>
							<div class="col-md-6">
								<select name="lang_two">
									<option selected disabled hidden value=""></option>
									<option value="Python" <?php if($user_info->lang_two == "Python"){echo("selected");}?>>Python</option>
									<option value="Java" <?php if($user_info->lang_two == "Java"){echo("selected");}?>>Java</option>
									<option value="C/C++" <?php if($user_info->lang_two == "C/C++"){echo("selected");}?>>C/C++</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Language 3</label>
							<div class="col-md-6">
								<select name="lang_three">
									<option selected disabled hidden value=""></option>
									<option value="Python" <?php if($user_info->lang_three == "Python"){echo("selected");}?>>Python</option>
									<option value="Java" <?php if($user_info->lang_three == "Java"){echo("selected");}?>>Java</option>
									<option value="C/C++" <?php if($user_info->lang_three == "C/C++"){echo("selected");}?>>C/C++</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Courses Taken</label>
							<div class="col-md-6">
								<input type="checkbox" name="csci_261" value='CSCI 261' <?php if($user_info->csci_261 == "CSCI 261"){echo("checked");}?>>CSCI 261<br>
								<input type="checkbox" name="csci_262" value='CSCI 262' <?php if($user_info->csci_262 == "CSCI 262"){echo("checked");}?>>CSCI 262<br>
								<input type="checkbox" name="csci_306" value='CSCI 306' <?php if($user_info->csci_306 == "CSCI 306"){echo("checked");}?>>CSCI 306<br>
								<input type="checkbox" name="csci_406" value='CSCI 406' <?php if($user_info->csci_406 == "CSCI 406"){echo("checked");}?>>CSCI 406<br>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Edit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
