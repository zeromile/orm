@extends('layout')

@section('title')
    This is the cards page
@endsection

@section('content')
    <h1>This is the Cards Page</h1>
    <ul>
        @foreach($notes as $note)
            <li>{{ $note->id }}: {{ $note->body }} <strong>related card:</strong>{{ $note->card_id }} </li>
        @endforeach
    </ul>
@endsection


