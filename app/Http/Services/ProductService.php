<?php

namespace App\Services;

use App\Models\Product;

class ProductService 
{

    /**
     * 
     */
    public static function all()
    {
        return Product::all();
    }

    /**
     * 
     */
    public static function store($value)
    {
        $beneficiary = Product::create($value);
        return $beneficiary;
    }
    
    /**
     * 
     */
    public static function update($value, $product)
    {
        $product->fill([
            'name' => $value['name'],
            'special' => $value['special'],
            'type_product_id' => $value['type_product_id'],
        ]);

        $product->save();

        return $product;
    }
    
}