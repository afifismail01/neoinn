<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    // menentukan kolom mana saja yang dapat diisi
    protected $fillable = ['image', 'name', 'slug', 'thumbnail', 'city_id', 'category_id', 'description', 'address'];

    public function city()
    {
        // relasi belongsTo untuk 1:1 dan juga bisa untuk 1:many. Disesuaikan dengan sudut pandangnya.
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
