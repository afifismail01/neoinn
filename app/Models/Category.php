<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // menentukan kolom mana saja yang dapat diisi
    protected $fillable = ['image', 'name', 'slug'];

    public function boardingHouses(){
        return $this->hasMany(BoardingHouse::class);
    }
}
