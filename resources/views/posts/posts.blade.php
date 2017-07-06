@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-md-offset-2">

                @IF($posts)
                @foreach($posts as $key => $post)
                <div class="postcontainer">
                  <h1>{{$post->id}}.<a href="{{ url('post/'.$post->id)}}">{{$post->title}}</a></h1>
                  <p class="lead pinfo">
                  by <a href="{{ url('user/'.$post->user->id)}}">{{$post->user->name}}</a>
                  <span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}
                  </p>
                  <p class="lead pbody">
                  {{$post->body}}
                  </p>
                </div>
                @endforeach
                {{ $posts->links() }}
                @ELSE
                No Posts Yet !
                @ENDIF

        </div>
    </div>
</div>
@endsection
