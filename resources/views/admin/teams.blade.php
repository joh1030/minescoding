@extends('app')
@section('content')

<?php
    echo "<div class='container' style='width:50%'>";
    for ($i = 1; $i <= $numTeams; $i++) {
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>Team $i</div>";
        foreach($users_info as $user_info) {
            if ($user_info->team_id == $i) {
                foreach($users as $user) {
                    if ($user_info->user_id == $user->id) {
                        $url = url('/admin/users/' . $user->id);
                        echo "<div class='panel-body'><a href='$url'>$user->name</a></div>";
                    }
                }
            }
        }
        echo "</div>";
    }
    if (!empty($nullteam)) {
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>Free Agents</div>";
        foreach ($users_info as $user_info) {
            if (is_null($user_info->team_id)){
                foreach ($users as $user) {
                    if ($user_info->user_id == $user->id) {
                        $url = url('/admin/users/' . $user->id);
                        echo "<div class='panel-body'><a href='$url'>$user->name</a></div>";
                    }
                }
            }
        }
        echo "</div>";
    }
    $url = url('/admin/generate');
    echo "<a href='$url' class='btn btn-primary btn-block'>Generate Teams</a>";
    echo "</div>";
?>

@endsection