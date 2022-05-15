@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1> Edit Profile </h1>
            </div>



        <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

                <div class="col-md-6">
                    <input id="title" type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    name="title" value="{{ old('title') ?? $user->profile->title }}" 
                     autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                <div class="col-md-6">
                    <input id="description" type="text" 
                    class="form-control @error('description') is-invalid @enderror" 
                    name="description" value="{{ old('description') ?? $user->profile->description }}" 
                     autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="" style="display: flex; justify-content: center;">
                <input type="checkbox", class="" id="privacy" name="privacy"
                checked>
                <label style="margin-left: 12px;">Private profile</label>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Profile image</label>
                <input type="file", class="form-control-file" id="image" name="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4 w-20">
                <button class="btn btn-primary">Safe profile</button>
            </div>

        </div>
    </div>
  </form>
</div>
@endsection
