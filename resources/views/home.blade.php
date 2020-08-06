@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="/posts/create">Post a Blog <span class="sr-only">(current)</span></a>

                    <h3 class="header-title">Your Posts</h3>
                    @if (count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post ->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
                                {!!Form::hidden('_method', 'DELETE')!!}
                                {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                                {!!Form::close()!!}
                            </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <h5 class="text-center">You have no posts! Go ahead and create one :)</h5>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .header-title{
        padding-top: 20px;
    }

</style>
@endsection
