<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['post_id'];
    public function post(){
        $this->belongsTo(Post::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
