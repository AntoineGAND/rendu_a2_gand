<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body , $user_id)
    {
        $this->comments()->create(compact(['body', 'user_id']));
    }


    public function likes()
    {
        return $this->morphToMany(User::class, 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth()->id())->first();
        return (!is_null($like)) ? true : false;
    }
}
