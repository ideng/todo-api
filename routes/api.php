<?php

use App\Http\Controllers\SubtodoController;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

Route::get('/subtodos', [SubtodoController::class, 'index'])->name('subtodos.index');
Route::post('/subtodos', [SubtodoController::class, 'store'])->name('subtodos.store');
Route::get('/subtodos/{subtodo}', [SubtodoController::class, 'show'])->name('subtodos.show');
Route::put('/subtodos/{subtodo}', [SubtodoController::class, 'update'])->name('subtodos.update');
Route::delete('subtodos/{subtodo}', [SubtodoController::class, 'destroy'])->name('subtodos.destroy');
