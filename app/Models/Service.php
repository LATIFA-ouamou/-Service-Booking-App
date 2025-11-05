<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
 protected $fillable = [
        'title',
        'description',
        'duration',
        'price',
        'image',
    ];

//     public function bookings()
// {
//     return $this->hasMany(Booking::class);
// }
public function detail()
{
    return $this->hasOne(ServiceDetail::class);
}

public function booking()
{
    return $this->belongsTo(Booking::class);
}







public function bookings()
{
    return $this->belongsToMany(Booking::class, 'booking_service');
}

}
