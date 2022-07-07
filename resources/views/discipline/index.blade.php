@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Disciplinas</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Nome</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplines as $discipline)
                                    <tr>
                                        <td>{{ $discipline->name }}</td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a href="{{ route('discipline.show', $discipline->id) }}" class="btn btn-light">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <a href="{{ route('discipline.edit', $discipline->id) }}" class="btn btn-primary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('discipline.destroy', $discipline->id) }}" onclick="event.preventDefault();document.getElementById('discipline-delete-{{ $discipline->id }}').submit()" class="btn btn-danger">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('discipline.destroy', $discipline->id) }}" id="discipline-delete-{{ $discipline->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('discipline.create')}}" class="btn btn-primary">Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
