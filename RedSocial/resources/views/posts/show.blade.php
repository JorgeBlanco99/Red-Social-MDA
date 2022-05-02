@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
            <a href="/profile/{{$post->user_id}}" style="font-size: 25px; color:black; text-decoration:none;">{{\App\Models\User::find($post->user_id)->username}}</a>
                <p>{{$post->caption}} </p>
            </div>
            
            @can('delete', $post)
            <form action="/delete/{{ $post->id }}" method="get">
                @csrf

                <div class="row">
                    <div class="col-8 offset-2">

                        <div class="row pt-4 w-20">
                            <button class="btn btn-primary"> Delete post</button>
                        </div>

                    </div>
                </div>
            </form>
            @endcan
        </div>     
    </div>
</div>
@endsection
