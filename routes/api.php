<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TticketController;
use App\Http\Controllers\TicketListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
\
*/


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/tickets/user/{user:id}', [UserController::class , 'userTicket']);
Route::resource('/ticket', TticketController::class);
Route::resource('/ticketlist', TicketListController::class);
Route::post('/register', [AuthController::class , 'register']);

Route::post('/logout', [AuthController::class , 'logout'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class , 'login']);
Route::get('/me', [UserController::class, 'me'])->middleware('auth:sanctum');








