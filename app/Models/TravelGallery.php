<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TravelGallery extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'travel_packages_id',
        'image',
    ];

    protected $hidden = []; 

    public function travel_package() {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}
