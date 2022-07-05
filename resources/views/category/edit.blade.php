@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Editar Categoria de Curso</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.update', $category->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Categoria</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}">
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
