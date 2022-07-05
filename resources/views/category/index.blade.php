@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categoria do Curso</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Categoria</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a href="{{ route('category.show', $category->id) }}" class="btn btn-light">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{ route('category.destroy', $category->id) }}" onclick="event.preventDefault();document.getElementById('category-delete-{{ $category->id }}').submit()" class="btn btn-danger">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('category.destroy', $category->id) }}" id="category-delete-{{ $category->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Criar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
