@extends('layouts.app')
@section('content')

    <main>
        <div class="p-5 mb-3 bg-light text-center imagem-logo text-ver">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-roboto">SEASON</h1>
                <p class="fs-4">Tecnologia</p>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/estudante-feminina.png" class="card-img-top" alt="Student">
                    <div class="card-body">
                        <a href="{{ route('student.index') }}" class="btn btn-danger">Aluno</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/professor.png" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <a href="{{ route('teacher.index') }}" class="btn btn-danger">Professor</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/disciplina.png" class="card-img-top" alt="Discipline">
                    <div class="card-body">
                        <a href="{{ route('discipline.index') }}" class="btn btn-danger">Disciplina</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/sala-de-aula-do-google.png" class="card-img-top" alt="Classroom">
                    <div class="card-body">
                        <a href="{{ route('classroom.index') }}" class="btn btn-danger">Salas</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/categoria.png" class="card-img-top" alt="Category">
                    <div class="card-body">
                        <a href="{{ route('category.index') }}" class="btn btn-danger">Categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card text-center">
                    <img src="img/turma.png" class="card-img-top" alt="Team">
                    <div class="card-body">
                        <a href="{{ route('team.index') }}" class="btn btn-danger">Turma</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
