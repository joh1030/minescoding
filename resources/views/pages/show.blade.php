@extends('app')
@section('content')

<div class="container" style="width: 50%;">
	<!--show user information-->
	<div class="panel panel-primary">
		<div class="panel-heading">Name</div>
		<div class="panel-body">{{$user->name}}</div>
	</div>
	<div class='panel panel-primary'>
		<div class='panel-heading'>Style</div>
		<div class='panel-body'>{{$user_info->style}}</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Languages</div>
		<div class='panel-body'>Language 1: {{$user_info->lang_one}}</div>
		<div class='panel-body'>Language 2: {{$user_info->lang_two}}</div>
		<div class='panel-body'>Language 3: {{$user_info->lang_three}}</div>
	</div>
	<div class='panel panel-primary'>		
		<div class='panel-heading'>Courses Taken</div>
			<div>
				<?php
					if(!empty($user_info->csci_261)) {
						echo "<div class='panel-body'> $user_info->csci_261 </div>";
					}
					if(!empty($user_info->csci_262)) {
						echo "<div class='panel-body'> $user_info->csci_262 </div>";
					}
					if(!empty($user_info->csci_306)) {
						echo "<div class='panel-body'> $user_info->csci_306 </div>";
					}
					if(!empty($user_info->csci_406)) {
						echo "<div class='panel-body'> $user_info->csci_406 </div>";
					}
				?>
			</div>
	</div>
	<?php
		if(empty($user_info->team_id)){
			echo "<div class='panel panel-primary'>";
			echo "<div class='panel-heading'>Team Number</div>";
			echo "<div class='panel-body'>Not assigned yet</div>";
			echo "</div>";
		}
		else{
			echo "<div class='panel panel-primary'>";
			echo "<div class='panel-heading'>Team Number</div>";
			echo "<div class='panel-body'>$user_info->team_id</div>";
			echo "</div>";
		}
	?>
	<a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-primary btn-sm" style='margin:5px 5px 5px 0px'>Edit</a>
	<?php
		if ($user->type == 'admin') {
			$url = url('/admin');
			echo "<a href='$url' class='btn btn-primary btn-sm'>Admin</a>";
		}
	?>
</div>

@endsection