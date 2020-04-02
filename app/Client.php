<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    public function notes()
    {
        return $this->hasMany('App\ClientNote');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->subHours(5)->format('h:i a n/d/y');
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->subHours(5)->format('h:i a n/d/y');
    }

    public function lastNote()
    {
        return $this->hasOne('App\ClientNote')->latest();
    }

    protected $fillable = ['phone', 'email'];
}
