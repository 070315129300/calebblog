@extends('layouts.app')

@section('content')
    <h1>Create posts</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {{form::label('title', 'Title')}}
        {{form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}

    </div>
    <div class="form-group ">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body'])}}

    </div>
    <div class="form-group mb-5 mt-2">
        {{form::file('cover_image')}}
    </div>

    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
