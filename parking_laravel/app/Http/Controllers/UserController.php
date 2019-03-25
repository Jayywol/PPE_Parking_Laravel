<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use App\Booking;

use Auth;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $user = Auth::user();

      return view('home', compact('user'));
  }

  public function show()
  {
      $users = User::query()
             ->when(request()->has('lastName'), function($query) {
                  return $query->where('lastName', 'like', '%'. request('lastName') .'%');
             })
             ->when(request()->has('firstName'), function($query) {
                  return $query->where('firstName', 'like', '%'. request('firstName') .'%');
             })
             ->when(request()->has('email'), function($query) {
                  return $query->where('email', 'like', '%'. request('email') .'%');
             })
             ->get();



      $get_back = request()->all();

      return view('place.liste', compact('users', 'get_back'));
  }
}
