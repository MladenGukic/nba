<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamsController extends Controller
{
    public function index() 
    {
        $teams = Team::all();
        
        return view('teams.index', compact('teams'));
    }

    public function show(Request $request, $id) 
    {
        $team = Team::find($id);
        $players  = $team->players;
        return view('teams.show', compact('team', 'players'));
    }

}
