<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','description','image','user_id','category_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    
}
