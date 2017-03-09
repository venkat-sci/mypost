@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-md-offset-2">

                @IF($posts)
                @foreach($posts as $post)
                <h1>{{$post->title}}</h1>
                <p class="lead">
                by <a href="#">{{$post->user->name}}</a>
                </p>
                <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>

                <hr>
                <p class="lead">
                {{$post->body}}
                </p>

                @endforeach
                @ELSE
                No Posts Yet !
                @ENDIF

        </div>
    </div>
</div>
@endsection