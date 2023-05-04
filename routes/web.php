<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProcedureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/customlogin', [AuthController::class, 'customLogin'])->name('auth.login');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/clientes', [ClientController::class, 'index'])->name('client.clients');
Route::get('/novo-cliente', [ClientController::class, 'newClient'])->name('client.newClient');
Route::post('/save', [ClientController::class, 'save'])->name('client.save');
Route::get('/atualizar-cliente/{id}', [ClientController::class, 'newClient'])->name('client.updateCheck');
Route::put('/update-client', [ClientController::class, 'update'])->name('client.update');
Route::get('/deletar-cliente/{id}', [ClientController::class, 'delete'])->name('client.delete');

Route::get('/procedimentos', [ProcedureController::class, 'index'])->name('procedure.procedures');
Route::get('/novo-procedimento', [ProcedureController::class, 'newProcedure'])->name('procedure.newProcedure');
Route::post('/save-procedure', [ProcedureController::class, 'save'])->name('procedure.save');
Route::get('/atualizar-procedimento/{id}', [ProcedureController::class, 'newProcedure'])->name('procedure.updateCheck');
Route::put('/update-procedure', [ProcedureController::class, 'update'])->name('procedure.update');
Route::get('/deletar-procedimento/{id}', [ProcedureController::class, 'delete'])->name('procedure.delete');

Route::get('/calendario', [CalendarController::class, 'index'])->name('calendar.calendar');
Route::get('/novo-atendimento', [CalendarController::class, 'newService'])->name('calendar.newService');
Route::post('/save-service', [CalendarController::class, 'save'])->name('calendar.save');
Route::put('/update-calendar', [CalendarController::class, 'update'])->name('calendar.update');

Route::put('/done-calendar', [CalendarController::class, 'done'])->name('calendar.done');

Route::get('/cancelar-procedimento/{id}', [CalendarController::class, 'canceled'])->name('calendar.canceled');




