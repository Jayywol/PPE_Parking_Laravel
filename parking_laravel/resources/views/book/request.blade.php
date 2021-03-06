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
                    <div class="form-group">
                    <td>Afin d'effectuer une réservation, veuillez vérifier si une place est disponbible.</td>
                    </br>
                    </br>
                    <!-- Ajout d'un bouton appelant la fonction create du model booking -->
                      <a href="{{route('booking.create')}}">
                        <button type="submit" class="btn btn-default">
                          <i class="fa fa-plus">Réserver une place</i>
                        </button>
                      </a>
                    </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
