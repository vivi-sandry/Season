@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Cadastrar Disciplina</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('discipline.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Disciplina</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="category_id" class="bmd-label-floating">Categoria</label>
                                        <select id="category_id" type="text" class="form-control" name="category_id" value="category_id" autofocus>
                                            <option value="">Selecione...</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
