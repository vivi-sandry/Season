@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Salas</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <b>Nome da Sala</b> <br>
                                    {{ $classroom->name }}
                                </div>
                                <div class="col">
                                    <b>Quantidade de Maxima de Alunos</b> <br>
                                    {{ $classroom->max_student }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
