@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQGtjBpGSaaDgA/company-logo_200_200/0/1623056316209?e=2159024400&v=beta&t=kEo-e_UwcMZQvguFL-mhL7EEZ2kMipjp02dvTHH18ws" class="rounded-circle"alt="">
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
        <div class="col-4">
            <img src="/svg/postUlpgc.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/svg/postUlpgc.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/svg/postUlpgc.jpg" class="w-100">
        </div>
        </div>
    </div>    



</div>
@endsection
