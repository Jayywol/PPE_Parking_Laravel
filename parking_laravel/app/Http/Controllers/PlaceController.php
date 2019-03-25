<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place

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
}
