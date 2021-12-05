<?php

namespace App\Http\Services;

use App\Models\Location;

class LocationService
{

    /**
     * 
     */
    public static function all($province_id)
    {
        $locations = Location::select();
        $locations->when($province_id, function ($item) use($province_id){
            $item->where('province_id', $province_id);
        });

        return $locations->get();
    }
    
}