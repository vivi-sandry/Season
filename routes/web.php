<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//grupo de rotas referentes as telas de Alunos
Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\StudentController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\StudentController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\StudentController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{student}/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{student}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('destroy');

});


Route::group(['prefix' => 'team', 'as' => 'team.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\TeamController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\TeamController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\TeamController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{team}', [\App\Http\Controllers\TeamController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{team}/edit', [\App\Http\Controllers\TeamController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{team}', [\App\Http\Controllers\TeamController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{team}', [\App\Http\Controllers\TeamController::class, 'destroy'])->name('destroy');

});
