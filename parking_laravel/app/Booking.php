<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['duration'];

    public function user()
        {
          return $this->belongsTo('\App\User');
        }

        public function place()
        {
            return $this->belongsTo('\App\Place');
        }
}
