@extends('layout')

@section('title')
    This is a single card page
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>This is a single card</h1>
            <h3>
                {{ $card->title }}
            </h3>
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item"> {{ $note->body }} <a class="btn pull-right" href="/notes/{{$note->id}}/edit">EDIT</a></li>
                @endforeach
            </ul>
            <hr>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new note</button>
                </div>
            </form>
        </div>
    </div>
@endsection


