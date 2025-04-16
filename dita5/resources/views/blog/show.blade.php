@extends('blog.master')
@section('title','Show Page')
@section('content')
    <h1>Show Page</h1>
    <table class="table table-bordered">
        <tr>
            <td>Nr.</td>
            <td>Title</td>
            <td>Post</td>
            <td>Status</td>
        </tr> 
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
        </tr> 
    </table>
@endsection
