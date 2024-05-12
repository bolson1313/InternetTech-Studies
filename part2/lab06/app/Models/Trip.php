<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'continent', 'period', 'description', 'price', 'img', 'country_id'];

    protected $dates = ['created_at', 'updated_at'];

    protected $attributes = [
        //domyslna wartosc 7
        'period' => 7,
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
