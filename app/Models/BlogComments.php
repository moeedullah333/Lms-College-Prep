<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;

    protected $table = "blog_comments";

    public function user_detail()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
