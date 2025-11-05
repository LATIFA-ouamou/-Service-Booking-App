<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
 protected $fillable = [
    'service_id',
        'date',
        'time',
        'status'
        
    ];
// public function service()
// {
//     return $this->belongsTo(Service::class);
// }



public function services()
{

    return $this->hasMany(Service::class);
    
}






public function service()
{
    return $this->belongsToMany(Service::class, 'booking_service');
}

   
}
