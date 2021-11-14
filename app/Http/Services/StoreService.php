<?php

namespace App\Services;

use App\Models\Store;

class StoreService
{

    /**
     * 
     */
    public static function all()
    {
        return Store::all();
    }
    
    /**
     * 
     */
    public static function store($value)
    {
        $store = Store::create($value);
        return $store;
    }
    
    /**
     * 
     */
    public static function update($value, $beneficiary)
    {
        $beneficiary->fill([
            'type_store_id' => $value['type_store_id'],
            'location_id' => $value['location_id'],
            'name' => $value['name'],
            'address' => $value['address'],
            'phone' => $value['phone'],
            'latitude' => $value['latitude'],
            'longitude' => $value['longitude']
        ]);

        if(isset($value['image'])){
            $beneficiary->fill([
                'image' => $value['image']
            ]);
        }

        $beneficiary->save();

        return $beneficiary;
    }
}