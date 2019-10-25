@extends('layout')
@section('title', 'Create Note')

@section('content')
    <h1>Create Note</h1>
    <form method="POST" action="/note">
    
        {{ csrf_field() }}
        
        <div>
            <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Note name" required value="{{ old('name')}}">
        </div>
        <div>
            <textarea name="description" placeholder="Note description"></textarea>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
        
        @include('errors')
    </form>
@endsection