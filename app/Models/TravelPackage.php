<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TravelPackage extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'slug',
        'country',
        'about',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
    ];

    protected $hidden = [];

    public function travel_galleries() {
        return $this->hasMany(TravelGallery::class, 'travel_packages_id', 'id');
    }
    
}
