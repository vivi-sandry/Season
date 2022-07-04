@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tumas</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Data de Inicio</th>
                                    <th>Data de Fim</th>
                                    <th>Horário</th>
                                    <th>Duração da Aula</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td>{{ $team->started_at}}</td>
                                        <td>{{ $team->ended_at }}</td>
                                        <td>{{ $team->scheduled_at }}</td>
                                        <td>{{ $team->duration }}</td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a class="btn btn-primary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('team.destroy', $team->id) }}" class="btn btn-danger">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('team.create') }}" class="btn btn-primary">Criar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
