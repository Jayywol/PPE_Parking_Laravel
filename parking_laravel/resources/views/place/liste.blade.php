@extends('layouts.app')

@section('content')
<center>
  <h1>Liste des réservations</h1>
</center>

<div class = class="col-md-6">

  <table class="table table-dark">
    <thead>
      <tr>
        <td>ID Réservation : </td>
        <td>Date début : </td>
        <td>Numéro de l'utilisateur : </td>
        <td>Numéro de la place : </td>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($bookings as $booking): ?>
          <tr>
            <td>{{$booking->id}}</td>
            <td>{{$booking->created_at}}</td>
            <td>{{$booking->users_id}}</td>
            <td>{{$booking->place_id}}</td>
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

@endsection
