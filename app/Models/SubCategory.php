<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';

    protected $fillable = ['name','category_id'];

    protected $hidden = ['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function product(){
        return $this->hasMany(product::class,'id','subcategory_id');
    }
}
