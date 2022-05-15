<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){

        if ($search = \Request::get('q')) {
            $users =\App\Models\User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                        ->orWhere('username','LIKE',"%$search%");
            })->paginate(10);
        }else{
            $users = User::latest()->paginate(5);
        }

        return $users;
    }
}
