@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Professor</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-light">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('teacher.destroy', $teacher->id) }}" onclick="event.preventDefault();document.getElementById('teacher-delete-{{ $teacher->id }}').submit()" class="btn btn-danger">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('teacher.destroy', $teacher->id) }}" id="teacher-delete-{{ $teacher->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('teacher.create')}}" class="btn btn-primary">Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
