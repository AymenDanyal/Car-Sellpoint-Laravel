<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brands;
use App\Models\Dealers;


class Cars extends Model
{
    use HasFactory;

    protected $table = "cars";

    protected $fillable =
    [
        'id',
        'name',
        'brand_id ',
        'dealer_id',
        'transmission',
        'image',
        'video_url',
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
        return $this->belongsTo(Brands::class, 'brand_id');
    }
    public function images()
    {
        return $this->hasMany(Images::class, 'car_id');
    }
    public function dealer()
    {
        return $this->belongsTo(Dealers::class, 'dealer_id');
    }

    public static function getAllCars(){
        return Cars::with(['images','dealer','brand',])->orderBy('id','desc')->paginate(10);
    }
}
