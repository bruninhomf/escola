<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
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



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('login');
    });
    Route::get('/', [HomeController::class, 'index']);

    
    Route::get('/dashboard', [HomeController::class, 'index']);


    Route::get('/cursos', [CourseController::class, 'index']);
    Route::get('/curso/novo', [CourseController::class, 'create']);
    Route::post('/curso', [CourseController::class, 'store']);
    Route::get('/curso/visualizar/{course}', [CourseController::class, 'show']);
    Route::get('/curso/editar/{course}', [CourseController::class, 'edit']);
    Route::post('/curso/{course}', [CourseController::class, 'update']);
    Route::get('/curso/apagar/{course}', [CourseController::class, 'destroy']);
    Route::get('/import/novo', [CourseController::class, 'importView']);
    Route::post('/import', [CourseController::class, 'import']);


    Route::any('/alunos/search', [StudentController::class, 'search']);
    Route::get('/alunos', [StudentController::class, 'index']);
    Route::get('/aluno/novo', [StudentController::class, 'create']);
    Route::post('/aluno', [StudentController::class, 'store']);
    Route::get('/aluno/visualizar/{student}', [StudentController::class, 'show']);
    Route::get('/aluno/editar/{student}', [StudentController::class, 'edit']);
    Route::post('/aluno/{student}', [StudentController::class, 'update']);
    Route::get('/aluno/apagar/{student}', [StudentController::class, 'destroy']);
});



