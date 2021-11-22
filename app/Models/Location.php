<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['province_id', 'name'];

    public function beneficiary(){
        return $this->hasOne(Beneficiary::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
