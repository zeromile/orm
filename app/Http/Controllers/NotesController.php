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

        //method 1
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);

        //method 2
        // requires that
        //     protected $fillable = ['body'];
        // is added to the Note model to allow the 'body' to be fillable
//        $card->notes()->save(
//            new Note(['body' => $request->body])
//        );

        //method 3
        // requires that
        //     protected $fillable = ['body'];
        // is added to the Note model to allow the 'body' to be fillable
//        $card->notes()->create([
//            'body' => $request->body
//        ]);

        //method 4
        // request-all returns array of all
        // normally this would be dangerous because we can't
        // control everything that is being submitted
        // but because we have limited the $fillable to 'body' we are safe
//        $card->notes()->create($request->all());

        //method 5
//        $card->addNote($note);

        //method6
        // This requires creating a method in the model
        $card->addNote(
            new Note($request->all())
        );

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

//        $newnote = new Note;
//        $newnote->body = $request->body;
//        $newnote->save();

        return back();
    }

}
