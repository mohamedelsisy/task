<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $table    = 'product_options';
    protected $fillable = ['product_id', 'type', 'value'];
    protected $hidden   = ['created_at', 'updated_at'];
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
