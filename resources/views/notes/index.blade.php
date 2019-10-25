@extends('layout')
@section('title', 'Notes')

@section('content')
    <h1>Notes</h1>
    <a href="/note/create">Create</a>
    @foreach($notes as $note)
        <ul>
            <li>{{ $note->name }} <a href="/note/{{ $note->id }}">View</a></li>
        </ul>
    @endforeach
@endsection