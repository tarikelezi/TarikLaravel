@extends('blog.master')
@section('title','Home Page')
@section('content')
    <h1>Home Page</h1>
    <p>Home Page Content</p>
    @if(count($todos))
    <table class="table table-bordered">
        <tr>
            <td>Nr.</td>
            <td>Title</td>
            <td>Post</td>
            <td>Status</td>
            <td>Edit</td>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->description }}</td>
            {{--<td>{{ $todo->completed }}</td>--}}
            <td>
                @if($todo->completed)
                <span class="badge badge-success bg-secondary">Completed</span>
                @else
                <span class="badge badge-success bg-info">Open</span>
                @endif
            </td>
            <td>
                {{-- Preview --}}
                <a href="{{ route('todos.show', ['todo' => $todo->id]) }}" class="btn btn-sm btn-primary">Preview</a>

                {{-- Edit --}}
                <a href="{{ route('todos.edit', ['todo' => $todo->id]) }}" class="btn btn-sm btn-primary">Edit</a>

                {{-- DELETE --}}
                <form action="{{ route('todos.destroy', ['todo' => $todo->id]) }}" method="POST" onsubmit="return confirm('A jeni i sigurt!')" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
    
            </td>
        </tr> 
      
        @endforeach
    </table>
@else
    <div class="alert alert-info">
       Todo list eshte e zbrazet!
    </div>
@endif
@endsection
