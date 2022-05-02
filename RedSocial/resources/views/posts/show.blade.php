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
                            <button class="btn btn-secondary"> Delete post
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 12.125C3.75 7.56865 7.44365 3.875 12 3.875C16.5563 3.875 20.25 7.56865 20.25 12.125C20.25 16.6813 16.5563 20.375 12 20.375C7.44365 20.375 3.75 16.6813 3.75 12.125ZM12 2.375C6.61522 2.375 2.25 6.74022 2.25 12.125C2.25 17.5098 6.61522 21.875 12 21.875C17.3848 21.875 21.75 17.5098 21.75 12.125C21.75 6.74022 17.3848 2.375 12 2.375ZM9.53033 8.59467C9.23744 8.30178 8.76256 8.30178 8.46967 8.59467C8.17678 8.88756 8.17678 9.36244 8.46967 9.65533L10.9393 12.125L8.46967 14.5947C8.17678 14.8876 8.17678 15.3624 8.46967 15.6553C8.76256 15.9482 9.23744 15.9482 9.53033 15.6553L12 13.1857L14.4697 15.6553C14.7626 15.9482 15.2374 15.9482 15.5303 15.6553C15.8232 15.3624 15.8232 14.8876 15.5303 14.5947L13.0607 12.125L15.5303 9.65533C15.8232 9.36244 15.8232 8.88756 15.5303 8.59467C15.2374 8.30178 14.7626 8.30178 14.4697 8.59467L12 11.0643L9.53033 8.59467Z" fill="white"/>
                            </svg>

                            </button>
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
