<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        //return $request->all();
        //return $card;
        $note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);
        return back();
    }
}
