<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','user_id'];

    // public function Author(){
    // 	return $this->belongTo(User::class);
    // }

     public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
