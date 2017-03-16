@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-md-offset-2">
        <p>
                <h2>{{$user->name}}</h2><br/>
                <div class="row">
                  <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="#" alt="Your Profile image how you are looking">
                    </a>
                  </div>
                </div>
                {{$user->profile_photo or "you are here fucker"}}<br/>
                {{$user->created_at->diffForHumans()}}
            </ol>
        </p>
        </div>
    </div>
</div>
@endsection