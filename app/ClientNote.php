<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ClientNote extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->subHours(5)->format('h:i a n/d/y');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('h:i a n/d/y');
    }
}
