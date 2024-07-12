<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table="images";
    protected $fillable=
    [
    'car_id',
    'is_parent',
    'parent_id',
    'url',
    'created_at',
    'updated_at',
    ];

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id');
    }
}
