@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-md-offset-2">
        
                @IF($post)
                <h1><a href="{{ url('post/'.$post->id)}}">{{$post->title}}</a></h1>
                <p class="lead">
                by <a href="#">{{$post->user->name}}</a>
                <small><span class="glyphicon glyphicon-time"></span></small> {{$post->created_at->diffForHumans()}}
                </p>
                <p class="lead">
                {{$post->body}}
                </p>
                @ENDIF
        </div>
    </div>
</div>
@endsection