<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'dni', 'address', 'email', 'password', 'location_id'];

    public function location(){
        return $this->belongsTo(Location::class);
    }
}