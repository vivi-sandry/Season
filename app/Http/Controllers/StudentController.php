<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Student $student)
    {

    }

    public function edit(Student $student)
    {

    }

    public function update(Request $request, Student $student)
    {

    }

    public function destroy(Student $student)
    {

    }

}
