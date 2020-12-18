<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(Player $player){

        $player::all();

        return view('player', compact('player'));
    }
}
