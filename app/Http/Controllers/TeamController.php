<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Classroom;
use App\Models\Teacher;
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
        $classrooms = Classroom::all();

        $teachers = Teacher::all();

        return view('team.create', compact('classrooms', 'teachers'));
    }

    public function store(TeamRequest $request)
    {
        Team::create($request->all());

        return redirect()->route('team.index');
    }

    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    public function edit(Team $team)
    {
        $classrooms = Classroom::all();

        $teachers = Teacher::all();

        return view('team.edit', compact('team','classrooms', 'teachers'));
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());

        return redirect()->route('team.index');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('team.index');
    }


}
