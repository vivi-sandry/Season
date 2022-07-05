<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassroomRequest;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index(Request $request)
    {
        $classrooms = Classroom::all();

        return view('classroom.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classroom.create');
    }

    public function store(ClassroomRequest $request)
    {
        Classroom::create($request->all());

        return redirect()->route('classroom.index');
    }

    public function show(Classroom $classroom)
    {
        return view('classroom.show', compact('classroom'));
    }

    public function edit(Classroom $classroom)
    {
       return view('classroom.edit', compact('classroom'));
    }

    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update($request->all());

        return redirect()->route('classroom.index');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('classroom.index');
    }
}
