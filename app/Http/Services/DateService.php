<?php

namespace App\Services;

use App\Models\Date;
use App\Models\TypeDate;
use Carbon\Carbon;

class DateService
{

    /**
     * 
     */
    public static function all()
    {
        $dates = Date::all();

        foreach ($dates as $date) {
            $acreditacion = $date->type_dates->where('name', 'Acreditacion')->first()->dates->first()->date;
            $vencimiento = $date->type_dates->where('name', 'Vencimiento')->first()->dates->first()->date;
            $rendicion = $date->type_dates->where('name', 'Rendición')->first()->dates->first()->date;
        }

        return ["data" => ["Acreditacion" => $acreditacion, 
                           "Vencimiento" => $vencimiento, 
                           "Rendicion" => $rendicion]];
    }
    
    /**
     * 
     */
    public static function store($value)
    {
        $data = Date::insert($value);
        return $value;
    }
    
    /**
     * 
     */
    public static function update($value, $date)
    {
        $date->fill([
            'date' => $value['date'],
        ]);

        $date->save();

        return $date;
    }
}