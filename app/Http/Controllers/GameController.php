<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll()
    {
        $games = Game::all();
        return view('games.games', ['games' => $games]);

    }
}
