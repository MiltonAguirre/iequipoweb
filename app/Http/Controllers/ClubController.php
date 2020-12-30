<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Club;
class ClubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll()
    {
        $clubs = Club::all();
        return view('clubs.clubs', ['clubs' => $clubs]);

    }
    public function showMyClub()
    {
        $club = \Auth::user()->club;
        return view('clubs.myClub', ['club' => $club]);

    }
}
