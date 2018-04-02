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

    public function getStartDateAttribute()
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['date_start'])
            ->formatLocalized('%A, %d %B %Y');
    }

    public function getEndDateAttribute()
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['date_end'])
            ->formatLocalized('%A, %d %B %Y');
    }
}
