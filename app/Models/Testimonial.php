<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Testimonial extends Model
{
    protected $fillable = [
        'boarding_house_id','photo','name','rating'
    ];

    public function boardingHouse(){
        return $this->belongsTo(BoardingHouse::class);
    }
}
