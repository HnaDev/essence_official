<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'pro_id', 'order_id', 'name', 'quantity', 'unit_price', 'size', 'status', 'created_at', 'updated_at'];


    public function pro()
    {
        return $this->belongsTo(Products::class);
    }
    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
    // public function scopeSearch($query)
    // {
    //     $query = $query->where('name','like','%'.request()->keyword.'%');
    //     return $query;
    // }
}
