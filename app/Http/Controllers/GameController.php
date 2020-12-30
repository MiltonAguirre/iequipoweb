<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Club;
class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll($club_id=0)
    {
      if($club_id){
        $club = Club::find($club_id);
        $gamesOpen = $club->fields()
                ->join('games','fields.id','=','games.field_id')
                ->where('state', '=', 'open')->get();

        $gamesClose = $club->fields()
                ->join('games','fields.id','=','games.field_id')
                ->where('state', '=', 'close')->get();

      }else{
        $gamesOpen = Game::where('state', '=', 'open')->get();
        $gamesClose = Game::where('state', '=', 'close')->get();
      }

      return view('games.games', [
        'games_open' => $gamesOpen,
        'games_close' => $gamesClose,
        'club_id' => $club_id
      ]);

    }
    public function store(Request $request)
    {
      dd($request);
    }
}
