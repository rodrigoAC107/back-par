<?php

namespace App\Services;

use App\Models\Beneficiary;

class BeneficaryService 
{

    /**
     * 
     */
    public static function all($per_page)
    {
        return Beneficiary::orderBy('id', 'DESC')->paginate($per_page);
    }
    
    /**
     * 
     */
    public static function store($value)
    {
        $beneficiary = Beneficiary::create($value);
        return $beneficiary;
    }
    
    /**
     * 
     */
    public static function update($value, $beneficiary)
    {
        $beneficiary->fill([
            'name' => $value['name'],
            'email' => $value['email'],
            'lastname' => $value['lastname'],
            'location_id' => $value['location_id'],
            'dni' => $value['dni'],
            'address' => $value['address'],
        ]);

        $beneficiary->save();

        return $beneficiary;
    }
}