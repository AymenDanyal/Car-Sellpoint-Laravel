<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $table="models";

    protected $fillable=
    [
    'brand_id ',
    'name',
    'created_at',
    'updated_at',
    ];
    public function variants()
    {
        return $this->hasMany(Variants::class, 'model_id');
    }
}
