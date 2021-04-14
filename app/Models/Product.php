<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table    = 'products';
    protected $fillable = ['name'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function options(){
        return $this->hasMany(ProductOption::class, 'product_id', 'id');
    }

    public function colors(){
        return $this->hasMany(ProductOption::class, 'product_id', 'id')->where('type', '=', 'colors');
    }

    public function sizes(){
        return $this->hasMany(ProductOption::class, 'product_id', 'id')->where('type', '=', 'sizes');
    }

    public function types(){
        return $this->hasMany(ProductOption::class, 'product_id', 'id')->where('type', '=', 'types');
    }




}
