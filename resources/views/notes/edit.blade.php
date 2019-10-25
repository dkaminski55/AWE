@extends('layout')
@section('title', 'Edit Note')

@section('content')
    <h1>Edit Note</h1>
    <form method="POST" action="/note/{{ $note->id }}">
    
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        
        <div>
            <input type="text" name="name" placeholder="Note name" value="{{ $note->name }}">
        </div>
        <div>
            <textarea name="description" placeholder="Note description">{{ $note->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
    <form method="POST" action="/note/{{ $note->id }}">
    
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        
        <div>
            <button type="submit">Delete</button>
        </div>
    </form>
@endsection