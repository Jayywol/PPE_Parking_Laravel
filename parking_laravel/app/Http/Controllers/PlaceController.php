<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Booking;
use App\User;

use Auth;

class PlaceController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function create()
  {
      Place::create();

      return redirect()->back();
  }

  public function listPlace()
  {
    $place = Place::all();
    return view('place.list', ['place'=> $place]);
  }
}
