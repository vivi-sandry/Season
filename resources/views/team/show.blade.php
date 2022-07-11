@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Turmas</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <b>Turma</b> <br>
                                    <br> {{ $team->id }}
                                </div>
                                <div class="col">
                                    <b>Data de inicio</b> <br>
                                    {{ $team->started_at }}
                                </div>
                                <div class="col">
                                    <b>Data de fim</b> <br>
                                    {{ $team->ended_at }}
                                </div>
                                <div class="col">
                                    <b>Horário</b> <br>
                                    <br> {{ $team->scheduled_at }}
                                </div>
                                <div class="col">
                                    <b>Duração da aula</b> <br>
                                    {{ $team->duration }}
                                </div>
                                <div class="col">
                                    <b>Sala</b> <br>
                                    <br> {{ $team->classroom?->name }}
                                </div>
                                <div class="col">
                                    <b>Professor</b> <br>
                                    <br> {{ $team->teacher?->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
