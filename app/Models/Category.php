<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

   
    // public function brands()
    // {
    //     return $this->hasMany(Brand::class);
    // }
    public function brands()
    {
        return $this->hasMany('App\Models\Brand','cat_id', 'id');
    }
}
