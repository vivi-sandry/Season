@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Editar Turma</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('team.update', $team->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="started_at" class="bmd-label-floating">Data de inicio</label>
                                        <input id="started_at" type="date" class="form-control" name="started_at" value="{{ $team->started_at }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="ended_at" class="bmd-label-floating">Data de fim</label>
                                        <input id="ended_at" type="date" class="form-control" name="ended_at" value="{{ $team->ended_at }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="scheduled_at" class="bmd-label-floating">Horário</label>
                                        <input id="scheduled_at" type="time" class="form-control" name="scheduled_at" value="{{ $team->scheduled_at }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="duration" class="bmd-label-floating">Horário</label>
                                        <input id="duration" type="number" class="form-control" name="duration" value="{{ $team->duration }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="classroom_id" class="bmd-label-floating">Sala</label>
                                        <select id="classroom_id" type="text" class="form-control" name="classroom_id" value="classroom_id" autofocus>
                                            <option value="">Selecione...</option>
                                            @foreach($classrooms as $classroom)
                                                <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="teacher_id" class="bmd-label-floating">Professor</label>
                                        <select id="teacher_id" type="text" class="form-control" name="teacher_id" value="teacher_id" autofocus>
                                            <option value="">Selecione...</option>
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
