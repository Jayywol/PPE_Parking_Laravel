<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Booking;
use App\User;

use Auth;

class BookingController extends Controller
{
    public function create()
    {
      $user = Auth::user();
      $place = Place::where('available', TRUE)->first();

      Booking::create(['users_id' => $user->id, 'place_id' => $place->id]);
      $place->available = FALSE;
      $place->save();
      flash('Vous avez réservé la place '.$place->id)->success()->important();

      return redirect()->back();
    }
}
