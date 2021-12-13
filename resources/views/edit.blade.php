@extends('master')

@section('pageTitle', 'Edit Posts Details')

@section('content')

    <h1 class="display-6">Edit Post</h1>

    <hr/>
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['\App\Http\Controllers\PostController@update', $student->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('text', 'Text')}}
        {{Form::text('text', $post->text, ['class' => 'form-control'])}}
    </div>


    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}

@endsection
