<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Models\Post $post)
    {
        auth()->user()->likes()->create([
            'post_id' => $post->id,
        ]);
        return redirect('/p/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Post $post)
    {
        $this->authorize('like',$post,auth()->user());
        Like::where('user_id','=',auth()->user()->id)->where('post_id','=',$post->id)->delete();
        return redirect('/p/' . $post->id);
    }
}
