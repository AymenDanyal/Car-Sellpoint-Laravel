<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;
use App\Models\Models;
use App\Models\Variants;

class Brands extends Model
{
    use HasFactory;
    
    protected $table="brands";

    protected $fillable=
    [
    'id',
    'name',
    'created_at',
    'updated_at',
    ];
    
    public function cars()
    {
        return $this->hasMany(Cars::class, 'brand_id');
    }
    public function models()
    {
        return $this->hasMany(Models::class, 'brand_id');
    }

}
