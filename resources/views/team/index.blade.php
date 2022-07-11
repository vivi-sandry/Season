@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tumas</div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                                                <a href="{{ route('team.show', $team->id) }}" class="btn btn-light">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('team.destroy', $team->id) }}" onclick="event.preventDefault();document.getElementById('team-delete-{{ $team->id }}').submit()" class="btn btn-danger">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('team.destroy', $team->id) }}" id="team-delete-{{ $team->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
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
    </div>
@endsection
