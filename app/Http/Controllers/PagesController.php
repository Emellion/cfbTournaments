<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{
    public function dashboardPage() {
        return view('dashboard');
    }

    public function teamsPage() {
        return view('teams');
    }

    public function tournamentsPage() {
        return view('tournaments');
    }

    public function leaderboardPage() {
        return view('leaderboard');
    }

    public function createTournamentpage() {
        return view('createTournament');
    }
}
