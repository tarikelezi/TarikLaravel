
@extends('blog.master')
@section('title','Edit Page')
@section('content')
    <h1>Edit Page</h1>
    <div class="container my-4">
        @if($errors->any)
            @foreach($errors->all as $error)
                <p>{{ $error}}</p>
            @endforeach
        @endif
        <form action="{{route('todos.update', $todo->id)}}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
            <br>
            <input type="text" name="description" value="{{ $todo->description }}" class="form-control">
            <input type="checkbox" name="completed" value="1" @if($todo->completed) checked @endif>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
        </form>
    </div>
@endsection
