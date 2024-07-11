<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
     
    protected $table="cars";

    protected $fillable=
    [
    'id',
    'name',
    'brand_id ',
    'dealer_id',
    'transmission',
    'image',
    'engineCapacity',
    'engineType',
    'title',
    'body_type',
    'price',
    'year',
    'description',
    'created_at',
    'updated_at',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
