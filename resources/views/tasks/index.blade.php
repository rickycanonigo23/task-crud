@extends('layouts.app')

@section('content')
    <div>
        <h2>Tasks</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">Add Task</a>
        @if ($tasks->isEmpty())
            <p>No tasks found.</p>
        @else
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
        @endif
    </div>
@endsection
