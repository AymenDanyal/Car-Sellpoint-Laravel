<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;


class Dealers extends Model
{
    use HasFactory;
    protected $table="dealers";
    protected $fillable=
    [
    'car_id',
    'brand_id',
    'model_id',
    'created_at',
    'updated_at',
    ];
    public function cars()
    {
        return $this->hasMany(Cars::class, 'dealer_id');
    }
}
