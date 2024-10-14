<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Models\Ticket;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/movies', [MovieController::class, 'index'])->name("movies.index");
Route::get('/movies/tickets/{movie:id}', [MovieController::class, 'tickets'])->name("movies.tickets");
Route::get('/movies/book/{movie:id}', [MovieController::class, 'book'])->name("movies.book");

Route::post('/ticket/submit', [TicketController::class, 'submit'])->name("ticket.submit");
Route::put('/ticket/checkin/{ticket:id}', [TicketController::class, 'checkin'])->name("ticket.checkin");
Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name("ticket.delete");
