<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = "order_details";

    public function order_detail()
    {
        return $this->hasOne(Orders::class,'id','order_id');
    }

    public function courses_detail()
    {
        return $this->hasOne(Courses::class,'id','product_id');
    }
}
