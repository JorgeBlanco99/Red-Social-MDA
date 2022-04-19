@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf

    <div class="row">
        <div class="col-8 offset-2">

        <div class="row mb-3">
                <label for="caption" class="col-md-4 col-form-label text-md-end">Posts Caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" value="{{ old('caption') }}" 
                     autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Posts image</label>
                <input type="file", class="form-control-file" style="padding-left: 61px; padding-top:10px;" id="image" name="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4 w-20">
                <button class="btn btn-primary"> Add new post</button>
            </div>

        </div>
    </div>
  </form>
</div>
@endsection