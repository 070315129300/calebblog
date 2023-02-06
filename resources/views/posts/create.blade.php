@extends('layouts.app')

@section('content')
    <h1>Create posts</h1>

    {!! Form::open(['url' => '', 'method'=>'POST']) !!}
    <div class="form-group">
        {{form::label('title', 'Title')}}
        {{form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}

    </div>
    <div class="form-group mb-5">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body'])}}

    </div>

    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
