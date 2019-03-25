<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['available'];

    public function booking()
    {
      return $this->hasMany('\App\Booking');
    }
}
