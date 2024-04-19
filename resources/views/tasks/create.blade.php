@extends('layouts.app')

@section('content')
    <div>
        <h2>Create Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
