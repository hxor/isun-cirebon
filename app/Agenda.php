<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'title', 'date_start', 'clock_start', 'date_end', 'clock_end', 
        'location', 'address', 'description', 'status'
    ];

    public function images()
    {
        return $this->hasMany(AgendaGallery::class);
    }
}
