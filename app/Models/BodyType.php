<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    use HasFactory;
    protected $table="body_type";

    protected $fillable=
    [
    'name',
    'created_at',
    'updated_at',
    ];
}
