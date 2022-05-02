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
            <form action="/delete/{{ $post->id }}" method="get" style="margin-bottom:16px">
                @csrf

                <div class="">
                    <div class="">

                        <div class="">
                            <button class="btn btn-primary"> Delete post</button>
                        </div>

                    </div>
                </div>
            </form>
            @endcan

            <form action="/p/{{$post->id}}" method="post">
                @csrf

                <div class="">
                    <div class="" style="display:flex; align-items: center;">

                    <div class="" style="margin-right: 16px;">
                        <input id="comment" type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="comment" placeholder="Your comment" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="" style="width: 24px; height:24px;border-width: 0px; background-color: white;">
                        <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5305 2.59469C20.7314 2.79557 20.8016 3.0927 20.7117 3.3622L14.7115 21.3622C14.6155 21.65 14.3557 21.8516 14.0531 21.8731C13.7505 21.8946 13.4648 21.7318 13.3291 21.4604L9.44093 13.684L1.66454 9.79584C1.39322 9.66018 1.23033 9.37444 1.25184 9.07185C1.27334 8.76927 1.475 8.50943 1.76278 8.41351L19.763 2.41351C20.0325 2.32367 20.3297 2.39382 20.5305 2.59469ZM10.9125 13.2731L13.861 19.1701L18.8143 4.31087L3.95487 9.26396L9.85187 12.2125L12.9698 9.09471C13.2627 8.80183 13.7376 8.80184 14.0305 9.09474C14.3233 9.38764 14.3233 9.86252 14.0304 10.1554L10.9125 13.2731Z" fill="#22282F"/>
                        </svg>
                    </button>

                    </div>
                </div>
            </form>
        </div>     
    </div>
</div>
@endsection
