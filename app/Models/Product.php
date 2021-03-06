<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'special', 'type_product_id'];

    public function typeProduct(){
        return $this->belongsTo(TypeProduct::class);
    }
}
