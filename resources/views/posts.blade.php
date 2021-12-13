@extends('master')

@section('pageTitle', 'Posts Index')

@section('content')
    <h1 class="display-6">Posts</h1>
    <a href="{{route('posts.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Title</th>
        <th>Text</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1">Delete Post</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection
