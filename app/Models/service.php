<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = ['name'];

    public function rooms()
    {
        return $this->belongsToMany(room::class, 'room_services', 'service_id', 'room_id');
    }
}
