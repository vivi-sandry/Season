<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $teams = Team::all();

        return view('team.index', compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(TeamRequest $request)
    {
        Team::create($request->all());

        return redirect()->route('team.index');
    }

    public function show(Team $team)
    {

    }

    public function edit(Team $team)
    {

    }

    public function update(Request $request, Team $team)
    {

    }

    public function destroy(Team $student)
    {

    }


}
