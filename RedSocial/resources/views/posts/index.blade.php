@extends('layouts.app')

@section('content')
<div class="container" >
    <div style="padding:16px;">
        <h1>Recent posts!</h1>
    </div>
    @foreach ($posts as $post)
    <div style="border-width:1px; border-style:solid;">
    <div class="row">
        <div class="col-8 offset-2" style="padding: 16px;">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
    </div>
    <div class="row" style="padding: 16px;">
        <div class="col-4">
            <div>
            <a href="/profile/{{$post->user_id}}" style="font-size: 25px; color:black; text-decoration:none;">{{\App\Models\User::find($post->user_id)->username}}</a>
                <p>{{$post->caption}} </p>
            </div>
        </div>     
    </div>
    </div>
    @endforeach
</div>
@endsection