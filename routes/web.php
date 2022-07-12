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

Route::get('/season', function () {
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


Route::group(['prefix' => 'classroom', 'as' => 'classroom.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\ClassroomController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\ClassroomController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\ClassroomController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{classroom}', [\App\Http\Controllers\ClassroomController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{classroom}/edit', [\App\Http\Controllers\ClassroomController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{classroom}', [\App\Http\Controllers\ClassroomController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{classroom}', [\App\Http\Controllers\ClassroomController::class, 'destroy'])->name('destroy');

});


Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\CategoryController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\CategoryController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{category}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');

});


Route::group(['prefix' => 'discipline', 'as' => 'discipline.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\DisciplineController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\DisciplineController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\DisciplineController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{discipline}', [\App\Http\Controllers\DisciplineController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{discipline}/edit', [\App\Http\Controllers\DisciplineController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{discipline}', [\App\Http\Controllers\DisciplineController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{discipline}', [\App\Http\Controllers\DisciplineController::class, 'destroy'])->name('destroy');

});


Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
    //index é todos os dados iniciais. get exibe
    Route::get('', [\App\Http\Controllers\TeacherController::class, 'index'])->name('index');
    //rota intermediaria entre index e store
    Route::get('create', [\App\Http\Controllers\TeacherController::class, 'create'])->name('create');
    //rota store. post para cadastro de dado. post armazena
    Route::post('', [\App\Http\Controllers\TeacherController::class, 'store'])->name('store');
    //rota show exibir dados de um unico registro
    Route::get('{teacher}', [\App\Http\Controllers\TeacherController::class, 'show'])->name('show');
    //rota edit. exibir formulario para editar registro
    Route::get('{teacher}/edit', [\App\Http\Controllers\TeacherController::class, 'edit'])->name('edit');
    //rota update. put efetua a edição
    Route::put('{teacher}', [\App\Http\Controllers\TeacherController::class, 'update'])->name('update');
    //rota delete.
    Route::delete('{teacher}', [\App\Http\Controllers\TeacherController::class, 'destroy'])->name('destroy');

});
