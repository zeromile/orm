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

        // $card = Card::all(); //should work also

        return view('cards.index', compact('cards'));
    }


    public function show(Card $card)
    {
        // 1
        //return $card;

        // 2
        //return $card->notes[0]->user;
        // this will fail unless we set up the user method in
        //return $card;

        // 3,4,5,6,7 are done with the assumption that no $card variable is being sent in the functions
        // 3
        //$card = Card::all();
        //return $card;

        // 4 eager load notes
        //$card = Card::with('notes')->get(); //can't use all() when chaining
        // 'note' is coming from the Card class
        // with is eager loading the 'notes' associated with a card
        // -- storing them both in the array $data
        //return $card;
        // returns an array of Card OBJECTs

        // 5
        //$card = Card::with('notes')->find(1);
        //return $card;
        // this will do exactly the same things as #4 but returns a single Card OBJECT

        // 6
        //$card = Card::with('notes')->find(1);
        //return $card->notes[0]->user;
        // grab all the notes for card id 1 then pull the user info for that card
        // we're eager loading the notes and card but then making a seperate call for the user

        // 7
        //$card = Card::with('notes.user')->find(1);
        // "card, with the notes relationship, also load the user relationship"
        //return $card;

        // 8
        //$card->load('notes.user');
        // We have a card object being sent to this method so we don't have to set it
        // This new line is saying....
        // "card, eager load, notes.user"
        // The question I have is why don't we have to use $card = $card->load....???
        //return $card;



        //Final

        $card->load('notes.user');
        return view('cards.show', compact('card'));
    }
}
