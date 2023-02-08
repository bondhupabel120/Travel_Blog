<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /*Team Member*/
    public function addTeam(){
        return view('backend.team.add-team');
    }
    public function saveTeam(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'roll' => 'required',
        ]);
        Team::saveTeamData($request);
        return back()->with('message', 'Member Add Successfully');
    }
    public function manageTeam(){
        $teams = Team::orderBy('id', 'desc')->get();
        return view('backend.team.manage-team', compact('teams'));
    }
    public function editTeam($id){
        $team = Team::find($id);
        return view('backend.team.edit-team', compact('team'));
    }
    public function updateTeam(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'roll' => 'required',
        ]);
        Team::updateTeamData($request);
        return redirect()->route('manage.team')->with('message', 'Team Update Successfully');
    }
    public function deleteTeam(Request $request){
        Team::deleteTeamData($request);
        return redirect()->route('manage.team')->with('message', 'Team Delete Successfully');
    }
}
