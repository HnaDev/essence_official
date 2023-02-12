<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','status','total_quantity','total_price','note','phone','address','name','email','payment_method','created_at','updated_at'];
    public function Get_userName()
    {
        return $this->belongsTo(Users::class,'user_id');
    }
    public function getNameOrder_details()
    {
        return $this->hasMany(Order_details::class,'order_id');
    }
}
