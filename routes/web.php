<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Actions\RiotAPI\getLatestMatches;
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
Route::group(['scheme' => 'https'], function () {
    // Route::get(...)->name(...);
});

Route::get("/", function() {
    // $matches = getLatestMatches::getLatestMatches();
    // dd($matches);
    return redirect('tournaments');
});

Route::get('/tournaments', [PagesController::class, 'tournamentsPage'])->name('tournaments');

Route::get('/teams', [PagesController::class, 'teamsPage'])->name('teams');

Route::get('/leaderboard', [PagesController::class, 'leaderboardPage'])->name('leaderboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [PagesController::class, 'dashboardPage'])->name('dashboard');
    Route::get("/tournaments/create", [PagesController::class, 'createTournamentPage'])->name('createTournament');
});

// require_once __DIR__ . '/jetstream.php' ;
// require_once __DIR__ . '/fortify.php' ;