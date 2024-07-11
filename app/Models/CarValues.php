<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarValues extends Model
{
    use HasFactory;
    protected $table="car_values";
    protected $fillable=
    [
    'car_id',
    'brand_id',
    'model_id',
    'created_at',
    'updated_at',
    ];
}
