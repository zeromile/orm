<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        //$cards = DB::table('cards')->get();

        $cards = App\Card::all();

        return view('cards.index', compact('cards'));
    }

    public function notes()
    {
        //$notes = DB::table('notes')->get();

        $notes = App\Note::all();

        return view('cards.notes', compact('notes'));
    }

    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }
}
