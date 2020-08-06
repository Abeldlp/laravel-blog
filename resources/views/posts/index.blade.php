@extends('layouts.app')


@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well well-lg">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">
                </div>
                <div class="col-md-10 col-sm-8">
                    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <small>Created at {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No data in the database</p>
    @endif
    <style> 
        .well{
            background-color: rgb(236, 236, 236);
            margin: 10px;
            padding: 10px;
        }
    </styles>
@endsection

