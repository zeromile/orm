<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function addNote(Note $note)  //can accept an array or a note instance
    {
        return $this->notes()->save($note);
    }
}
