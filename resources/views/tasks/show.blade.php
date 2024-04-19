@extends('layouts.app')

@section('content')
    <div>
        <h1>TASK</h1>
        <h2 class="text-capitalize"><small>Title: </small>{{ $task->title }}</h2>
        <p class="text-capitalize"><small>Description: </small>{{ $task->description }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary" title="back"><</a>
    </div>
@endsection
