@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Salas</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Nome da Sala</th>
                                        <th>Quantidade Maxima de Alunos</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($classrooms as $classroom)
                                        <tr>
                                            <td>{{ $classroom->name }}</td>
                                            <td>{{ $classroom->max_student }}</td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('classroom.show', $classroom->id) }}" class="btn btn-light">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                    <a href="{{ route('classroom.edit', $classroom->id) }}" class="btn btn-primary">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="{{ route('classroom.destroy', $classroom->id) }}" onclick="event.preventDefault();document.getElementById('classroom-delete-{{ $classroom->id }}').submit()" class="btn btn-danger">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                                <form method="POST" action="{{ route('classroom.destroy', $classroom->id) }}" id="classroom-delete-{{ $classroom->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('classroom.create') }}" class="btn btn-primary">Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
