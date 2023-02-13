@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-8">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>

    </div>
<p>{{$post->body}}</p>
    <hr>
    <small>written on {{$post-> created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@update', $post->id], 'method'=>'POST', 'class' =>'pull-right']) !!}
    {{form::hidden('_method', 'DELETE')}}
    {{form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    @endif
    @endif
@endsection
