<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['user_id', 'word', 'word_hiragana', 'word_accent', 'word_audio', 'sentence', 'sentence_audio', 'category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
      }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes(){
      return $this->hasMany('App\Like');
    }

    public function likedUsers(){
      return $this->belongsToMany('App\User', 'likes');
    }

    public function isLikedBy($user){
      $liked_users_ids = $this->likedUsers->pluck('id');
      $result = $liked_users_ids->contains($user->id);
      return $result;
    }

}


