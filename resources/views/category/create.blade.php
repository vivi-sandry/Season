@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Cadastrar Categoria de Curso</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Categoria de Curso</label>
                                        <input id="name" type="text" class="form-control" name="name">
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
