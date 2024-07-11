<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
    use HasFactory;
    protected $table="variants";

    protected $fillable=
    [
    'model_id',
    'name',
    'features',
    'color',
    'created_at',
    'updated_at',
    ];
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
