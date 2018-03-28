<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'date_start', 'date_end', 'location', 'address', 'dispotition', 'reference', 'description'
    ];

    public function images()
    {
        return $this->hasMany(AgendaGallery::class);
    }
}
