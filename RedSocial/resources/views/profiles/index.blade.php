@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user -> profile->image}}" class="rounded-circle w-100"alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                @cannot('update', $user->profile)
                <div>
                    <h1>{{$user -> username}}</h1>
                    <follow-button user-Id="{{ $user->id }}" follows="{{ $follows}}"></follow-button>
                </div>
                @endcan
                @can('update', $user->profile)
                    <a href="/p/create" style="font-size: 15px; color:black;"> Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" style="font-size: 15px; color:black;">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-6" style="padding-right: 24px;"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-6" style="padding-right: 24px;"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-6" style="padding-right: 24px;"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
        </div>

        <div class="row pt-4 pb-4">
        @foreach($user -> posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="">
                </a>
            </div>
        @endforeach
        </div>
    </div>    



</div>
@endsection
