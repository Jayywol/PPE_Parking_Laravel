@extends('layouts.app')

@section('content')
<div class="content">
  <div class="title m-b-md">
  </br>
  Réservation de parking
  </br>
  Vous êtes connecté(e) {{ Auth::user()->firstName }}
  </div>
</div>
@stop
