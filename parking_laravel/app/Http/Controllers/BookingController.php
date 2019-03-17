<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use Auth;

class BookingController extends Controller
{
    public function add()
    {
      $place = Place::where('available', true)->first();
      if (!empty($place))
      {
        if (Auth::user()->id;
      }

    }
}
