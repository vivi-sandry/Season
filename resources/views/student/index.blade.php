@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Alunos</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Interesse</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->interest }}</td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('student.show', $student->id) }}" class="btn btn-light">
                                                        <i class="material-icons">visibility</i>
                                                    </a>
                                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="{{ route('student.destroy', $student->id) }}" onclick="event.preventDefault();document.getElementById('student-delete-{{ $student->id }}').submit()" class="btn btn-danger">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                                <form method="POST" action="{{ route('student.destroy', $student->id) }}" id="student-delete-{{ $student->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('student.create')}}" class="btn btn-primary">Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
