<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public $fillable = ['coupon','discount'];

    protected $hidden = ['created_at','updated_at'];
}
