@extends('blog.master')
@section('title','Contact Page')
@section('content')
    <h1>Create Page</h1>
    <p>Create Page Content</p>
    <div class="container my-4 ">
        @if($errors->any)
            @foreach($errors->all as $error)
                <p>{{ $error}}</p>
            @endforeach
        @endif
        <form action="{{route ('store')}}" method="POST">
            @csrf
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            <input type="text" name="description" class="form-control">
            <br>
            <input type="checkbox" name="completed" value="1" @if(old('title') == 1) checked @endif>
            <button type="submit" class="btn btn-sm btn-primary">Create</button>
        </form>
    </div>
@endsection
