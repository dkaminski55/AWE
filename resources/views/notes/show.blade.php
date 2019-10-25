@extends('layout')

@section('content')
    <h1> {{ $note->name }} </h1>
    
    <p>{{ $note->description }}</p>
    <a href="/note/{{ $note->id }}/edit">Edit</a>
    @if($note->tasks()->count())
        <div>
            @foreach ($note->tasks as $task)
                <div style="margin-left:30px">
                    <form method="POST" action="/tasks/{{ $task->id }}">
                    {{ csrf_field() }}  
                    {{ method_field('PATCH') }}
                        <label class="checkbox {{ $task->completed ? 'completed-task' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
    <!--test-->
    <form method="POST" action="/notes/{{ $note->id }}/tasks">
        {{ csrf_field() }}  
        <div class="field">
            <label for="description">New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="task description..." required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
        
        @include('errors')
    </form>
@endsection