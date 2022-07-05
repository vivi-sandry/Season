@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Cadastrar Sala</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('classroom.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Nome da Sala</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="max_student" class="bmd-label-floating">Quantidade maxima de alunos</label>
                                        <input id="max_student" type="number" class="form-control" name="max_student">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
