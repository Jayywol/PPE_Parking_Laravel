<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Booking;
use App\User;
use Carbon\Carbon;

use Auth;

class BookingController extends Controller
{
    public function create()
    {
      $user = Auth::user();
      $place = Place::where('available', TRUE)->first();
      $datefin=Carbon::now()->addDay(7);

      if (!empty($place))
      {
        $user->bookings()->create(['place_id'=>$place->id, 'date_end'=>$datefin]);
        $place->available = FALSE;
        $place->save();
        flash('Vous avez réservé la place '.$place->id)->success()->important();
        return redirect()->back();
      }
      else {
        flash('Erreur : vous ne pouvez pas réserver de place car aucune place n\'est disponible')->error();
        return redirect()->back();
      }
    }

    public function delete()
    {
      $user = Auth::user();
      flash('Erreur')->error();
      return redirect()->back();
    }

    public function listBook()
    {
      $book = Booking::all();
      return view('book.list', ['bookings'=> $book]);
    }
}
