<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'price', 'size', 'capacity', 'bed', 'description', 'is_booked'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function bills()
    {
        return $this->hasMany(bill::class);
    }

    public function services()
    {
        return $this->belongsToMany(service::class, 'room_services', 'room_id', 'service_id');
    }
}
