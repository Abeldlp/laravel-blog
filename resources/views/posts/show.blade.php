@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary" id="back-button">Back</a>
    <br>
    <img class="imagecover" src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">
    <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
        <div class="buttons">
            <a href="/posts/{{$post ->id}}/edit" class="btn btn-primary ">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post ->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
            {!!Form::hidden('_method', 'DELETE')!!}
            {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
            {!!Form::close()!!}
        </div>
        @endif
    @endif
    

<style>
    .buttons{
        display: flex;
        justify-content: space-around;
    }

    #back-button{
        margin-top:10px;
        margin-bottom: 20px;
    }
    .imagecover{
        width: 60%;
        position: relative;
        left: 20%;
        right: 20%;
    }
</style>
@endsection