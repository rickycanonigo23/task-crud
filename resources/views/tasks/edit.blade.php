@extends('layouts.app')

@section('content')
    <div>
        <h2>Edit Task</h2>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $task->title }}">
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection
