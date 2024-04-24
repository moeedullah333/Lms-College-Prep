<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = "orders";

    public function user_detail()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function order_items_detail()
    {
        return $this->hasMany(OrderItems::class,'order_id','id');
    }
    public function country()
    {
        return $this->hasOne(Countries::class,'id','country_id');
    }
    public function state()
    {
        return $this->hasOne(States::class,'id','state_id');
    }
    public function getCreatedAtAttribute($value)
    {
        return date('y-M-d',strtotime($value));
    }
}
