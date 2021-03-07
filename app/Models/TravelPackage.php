<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory, SoftDeletes;

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

    public function transactions() {
        return $this->hasMany(Transaction::class, 'travel_packages_id', 'id');
    }
    
}
