<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['available'];

    public fonction scopeAvailable($query){
      return $query->where('available', true);
    }
}
