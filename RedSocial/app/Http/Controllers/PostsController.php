<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->User::posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        dd(request()->all());
    }

    public function show(\App\Models\Post $post){
        return view('posts.show',compact('post'));
    }
}
