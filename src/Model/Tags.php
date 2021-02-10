<?php

namespace hw6_2\src\Model;

class Tags extends \Illuminate\Database\Eloquent\Model
{
    public function tags()
    {
        return $this->hasMany(Post::class);
    }
}