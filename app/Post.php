<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Image;

class Post extends Model
{
    public function image()
    {
    	return $this->hasMany(Image::class ,'post_id','id');
    }
    public function comment()
    {
    	return $this->hasMany(Comment::class ,'post_id','id');
    }
    public function user()
    {
    	return $this->hasOne(User::class ,'id','user_id');
    }
    public function category()
    {
        return $this->hasOne(Category::class ,'id','category_id');
    }
}
