@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Editar Aluno</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student.update', $student->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Nome</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $student->name }}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="email" class="bmd-label-floating">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="interest" class="bmd-label-floating">Interesses</label>
                                        <textarea id="interest" type="text" class="form-control" name="interest">{{ $student->interest }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
