<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    function findNumTeams($max, $min){
        $userInfos = UserInfo::all();
        $sizeArr = count($userInfos);
        if(($sizeArr%$max) == 0){
            $numTeams = $sizeArr/$max;
        }
        else{
            $numTeams = floor($sizeArr/$max + 1);
        }
        return $numTeams;
    }
    function createTeamArr($numTeams){
        $teams = array();
        for($i = 1; $i <= $numTeams; $i++){
            $teams[$i] = array();
        }
        return $teams;
    }
    function populateUserWeights(){
        $users = UserInfo::all();
        $usersWeights = array();
        foreach($users as $user){
            $weight = 0;
            if($user->csci_261 != null){
                $weight++;
            }
            if($user->csci_262 != null){
                $weight++;
            }
            if($user->csci_306 != null){
                $weight++;
            }
            if($user->csci_406 != null){
                $weight++;
            }
            $usersWeights[$user->user_id] = $weight;
        }
        return $usersWeights;
    }
    function sumVals($team){
        $sum = 0;
        foreach($team as $key=>$value){
            $sum += $value;
        }
        return $sum;
    }
    function addToTeam($selectTeam, $key){
        $user = UserInfo::findOrFail($key);
        $user->team_id = $selectTeam;
        $user->save();
    }

    function distribute($usersWeights, $teams, $max){
        arsort($usersWeights);

        foreach($usersWeights as $key=>$value){
            $minTeamWeight = AdminController::sumVals($teams[1]);
            $selectTeam = 1;

            foreach($teams as $teamKey => $teamValue) {

                if (count($teams[$teamKey]) < $max) {
                if (AdminController::sumVals($teamValue) < $minTeamWeight) {

                    $minTeamWeight = AdminController::sumVals($teamValue);
                    $selectTeam = $teamKey;
                }
            }
            }

            AdminController::addToTeam($selectTeam, $key);
            array_push($teams[$selectTeam], $value);
        }

    }

    function initTeams($numTeams) {
        for ($i = 1; $i <= $numTeams; $i++) {
            Team::create();
        }
    }

    function generate(){
        $min = Input::get('min');
        $max = Input::get('max');
        if ($min >= $max) {
            echo "<script type='text/javascript'>alert('Max should be greater than min! Try again.')</script>";
            //$msg = "try again bitch";
            return redirect('admin/generate')->withErrors(['Max should be greater than min! Try again.', 'The Message']);
        }
        Team::truncate(); // drop all team data
        $numTeams = AdminController::findNumTeams($max, $min);
        AdminController::initTeams($numTeams);
        $teams = AdminController::createTeamArr($numTeams);
        $usersWeights = AdminController::populateUserWeights();
        AdminController::distribute($usersWeights, $teams, $max);
        return redirect('/admin');
    }
    function edit($id) {
        $user = User::findOrFail($id);
        $user_info = UserInfo::findOrFail($id);
        $new_team = $_POST['team_id'];
        if ($new_team === '') {
            $new_team = null; // or 'NULL' for SQL
        }
        $user_info->team_id = $new_team;
        $user_info->save();
        return redirect('/admin');
    }
}
