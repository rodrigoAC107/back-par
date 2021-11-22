<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['type_store_id', 'location_id', 'name', 'address', 'phone', 'image', 'latitude', 'longitude'];

    public function type_store(){
        return $this->belongsTo(TypeStore::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
}
