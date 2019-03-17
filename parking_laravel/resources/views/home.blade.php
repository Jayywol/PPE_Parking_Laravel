@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in !
                    <!-- Place Name -->
                    <div class="form-group">
                      <label for="task" class="col-sm-3 control-label">Place</label>

                    <!-- Add Booking Button -->
                      <a href="{{route('booking.add', Auth::user())}}">
                        <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus"></i> Booking
                        </button>
                      </a>
                  </br>
                    <!-- @ if
                      You can book a place
                      <div class ="card">
                        <button type="button" class="btn btn-primary active">Book a place</button>
                      </div>
                      @ else
                        You can't book a place
                        <button type="button" class="btn btn-primary disabled">Disabled Primary</button>
                    @ endif-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
