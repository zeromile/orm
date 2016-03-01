@extends('layout')

@section('title')
    This is a single card page
@endsection

@section('content')
    <pre>
    <?php print_r($card); ?>
    </pre>

    <h1>This is a single card</h1>
    <h3>
        {{ $card->title }}
    </h3>
    <div>
        Card ID: {{ $card->id }}
    </div>
    <ul>
        @foreach($card->notes as $note)
            <li> {{ $note->body }}</li>
        @endforeach
    </ul>
@endsection


