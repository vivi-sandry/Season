<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplineRequest;
use App\Models\Category;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(Request $request)
    {
        $disciplines = Discipline::all();

        return view('discipline.index', compact('disciplines'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('discipline.create', compact('categories'));
    }

    public function store(DisciplineRequest $request)
    {
        Discipline::create($request->all());

        return redirect()->route('discipline.index');
    }

    public function show(Discipline $discipline)
    {
        return view('discipline.show', compact('discipline'));
    }

    public function edit(Discipline $discipline)
    {
        $categories = Category::all();

        return view('discipline.edit', compact('discipline', 'categories'));
    }

    public function update(DisciplineRequest $request, Discipline $discipline)
    {

        $discipline->update($request->all());

        return redirect()->route('discipline.index');
    }

    public function destroy(Discipline $discipline)
    {
        $discipline->delete();

        return redirect()->route('discipline.index');
    }
}
