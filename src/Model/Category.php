<?php

namespace hw6_2\src\Model;

class Category extends \Illuminate\Database\Eloquent\Model
{
    public function category()
    {
        return $this->hasMany(Post::class);
    }
}