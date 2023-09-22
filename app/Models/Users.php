<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'full_name',
        'email',
        'address',
        'password',
        'role',
        'phone'
    ];

    public function scopeSearch($query){
        $query = $query->where('name','like','%'.request()->keyword.'%');
        return $query;
    }
}
