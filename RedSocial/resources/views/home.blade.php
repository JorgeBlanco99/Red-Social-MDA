@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class ="col-3 p-5">
            <img src="/svg/logoUlpgc.png" class="rounded-circle">
        </div>
        <div class="col-9">
            <div><h1>ulpgc</h1></div>
            <div class = "d-flex">
            <div class ="pr-5"><strong>153</strong> posts</div>
            <div class ="pr-5"><strong>23k</strong> followers</div>
            <div class ="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">ulpgc.es</div>
            <div>La Universidad de Las Palmas de Gran Canaria es una universidad que cuenta con una amplia oferta de titulaciones en todas las grandes áreas de conocimiento, para ofrecer una formación integral a quienes acuden a ella, en una apuesta basada en la innovación, la calidad, la cultura y la internacionalización</div>
            <div><a href="#">www.ulpgc.es</a></div>
        </div>
    </div>

    <div class="row pt-4">
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
@endsection
