@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Aluno</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <b>Nome</b> <br>
                                    {{ $student->name }}
                                </div>
                                <div class="col">
                                    <b>Email</b> <br>
                                    {{ $student->email }}
                                </div>
                                <div class="col">
                                    <b>Interesse</b> <br>
                                    {{ $student->interest }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
