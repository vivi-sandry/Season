@extends('layouts.app')

@section('content')
    <div class="container-xl p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary">Cadastrar Turma</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('team.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="started_at" class="bmd-label-floating">Data de Inicio</label>
                                        <input id="started_at" type="date" class="form-control" name="started_at">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="ended_at" class="bmd-label-floating">Data de Fim</label>
                                        <input id="ended_at" type="date" class="form-control" name="ended_at">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="scheduled_at" class="bmd-label-floating">Horario da Aula</label>
                                        <input id="scheduled_at" type="time" class="form-control" name="scheduled_at">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 bmd-form-group">
                                        <label for="duration" class="bmd-label-floating">Duração da Aula</label>
                                        <input id="duration" type="number" class="form-control" name="duration">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

