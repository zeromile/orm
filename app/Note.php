<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //allows only 'body' to be mass-assigned
    protected $fillable = ['body'];

    public function card()
    {

        return $this->belongsTo(Card::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
