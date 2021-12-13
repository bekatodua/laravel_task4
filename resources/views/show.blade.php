@extends('master')

@section('pageTitle', 'Post Details')

@section('content')
    <h1 class="display-6">Post Details</h1>

    <hr/>

    <dl>
        <dt>Title</dt>
        <dd>{{ $post->title }}</dd>

        <dt>Text</dt>
        <dd>{{ $post->text }}</dd>

    </dl>

    <div class="d-flex">
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('students.destroy', $post->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete Post</button>
        </form>
    </div>
@endsection
