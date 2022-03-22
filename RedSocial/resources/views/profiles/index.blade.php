@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class ="col-3 p-5">
            <img src="/svg/logoUlpgc.png" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                <h1>ulpgc</h1>
                <a href="/p/create">Añadir nueva foto</a>
            </div>
            <div class = "d-flex">
            <div class ="pr-5"><strong>153</str ong> posts</div>
            <div class ="pr-5"><strong>23k</strong> followers</div>
            <div class ="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">ulpgc.es</div>
            <div>La Universidad de Las Palmas de Gran Canaria es una universidad que cuenta con una amplia oferta de titulaciones en todas las grandes áreas de conocimiento, para ofrecer una formación integral a quienes acuden a ella, en una apuesta basada en la innovación, la calidad, la cultura y la internacionalización</div>
            <div><a href="#">www.ulpgc.es</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
