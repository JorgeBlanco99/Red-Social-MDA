@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/logoUlpgc.png" class="rounded-circle"alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user -> username}}</h1>
                <a href="/p/create"> Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-6"><strong>3</strong> posts</div>
                <div class="pr-6"><strong>150</strong> followers</div>
                <div class="pr-6"><strong>100</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
        </div>

        <div class="row pt-4 pb-4">
        @foreach($user -> posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="">
                </a>
            </div>
        @endforeach
        </div>
    </div>    



</div>
@endsection
