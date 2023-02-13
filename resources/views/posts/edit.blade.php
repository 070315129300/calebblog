
@extends('layouts.app')

@section('content')
    <h1>Edit posts</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">

        {{form::label('title', 'Title')}}
        {{form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}

    </div>
    <div class="form-group mb-5">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Body'])}}

        <div class="form-group mb-5 mt-2">
            {{form::file('cover_image')}}
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
