@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Categoria de Curso</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <b>Categoria</b> <br>
                                    {{ $category->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
