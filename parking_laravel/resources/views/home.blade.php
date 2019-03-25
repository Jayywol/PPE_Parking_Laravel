@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Réservations</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Place Name -->
                    <div class="form-group">
                    <!-- Add Booking Button -->
                      <a href="{{route('booking.create')}}">
                        <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus">Réserver</i>
                        </button>
                      </a>
                  </br>
                    <!-- {{ Auth::user()->booking }} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
