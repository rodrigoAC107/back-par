<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'type_date_id', 'created_at', 'updated_at'];

    public $timestamps = true;
    
    public function type_dates()
    {
        return $this->belongsTo(TypeDate::class, 'type_date_id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];
}
