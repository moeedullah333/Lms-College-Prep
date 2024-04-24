<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value)
    {
        return date('F d,Y', strtotime($value));
    }

    public function user_detail()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function blog_comments()
    {
        return $this->hasMany(BlogComments::class,'blog_id','id')->with('user_detail');
    }
}
