@extends('app')
@section('content')

<div class="container" style="width: 50%">
	<div class="panel panel-primary">
		<div class="panel-heading">Name</div>
		<div class="panel-body">{{$user->name}}</div>
	</div>
	<div class='panel panel-primary'>
		<div class='panel-heading'>Style</div>
		<div class='panel-body'>{{$userinfo->style}}</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Languages</div>
		<div class='panel-body'>Language 1: {{$userinfo->lang_one}}</div>
		<div class='panel-body'>Language 2: {{$userinfo->lang_two}}</div>
		<div class='panel-body'>Language 3: {{$userinfo->lang_three}}</div>
	</div>
	<div class='panel panel-primary'>		
		<div class='panel-heading'>Courses Taken</div>
			<div>
				<?php
					if(!empty($userinfo->csci_261)) {
						echo "<div class='panel-body'> $userinfo->csci_261 </div>";
					}
					if(!empty($userinfo->csci_262)) {
						echo "<div class='panel-body'> $userinfo->csci_262 </div>";
					}
					if(!empty($userinfo->csci_306)) {
						echo "<div class='panel-body'> $userinfo->csci_306 </div>";
					}
					if(!empty($userinfo->csci_406)) {
						echo "<div class='panel-body'> $userinfo->csci_406 </div>";
					}
				?>
			</div>
	</div>
	<?php
		if(empty($userinfo->team_id)){
			echo "<div class='panel panel-primary'>";
			echo "<div class='panel-heading'>Current Team</div>";
			echo "<div class='panel-body'>Not assigned yet</div>";
			echo "</div>";
		}
		else{
			echo "<div class='panel panel-primary'>";
			echo "<div class='panel-heading'>Current Team</div>";
			echo "<div class='panel-body'>$userinfo->team_id</div>";
			echo "</div>";
		}
	?>
	<form method="POST" action="{{ url('admin/users/'. $user->id) }}">
		{!! csrf_field() !!}

		<div class='panel panel-primary'>
			<div class='panel-heading'>New Team:</div>
			<div class='panel-body'>
				<select name="team_id">
					<option selected value="{{ $userinfo->team_id }}"></option>
					<option value=''>Free Agents</option>
					<?php
						for($i = 1; $i <= $numTeams; $i++) {
							if ($i != $userinfo->team_id) {
								echo "<option value='$i'>$i</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

@endsection