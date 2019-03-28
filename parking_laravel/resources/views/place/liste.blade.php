@extends('layouts.app')

@section('content')
<center>
  <h1>Liste des réservations</h1>
</center>

<div class = class="col-md-6">

  <table class="table table-dark">
    <thead>
      <tr>
        <td>Numéro de la place : </td>
        <td>Date début : </td>
        <td>Date fin : </td>
        <td>Prénom de l'utilisateur</td>
        <td>Nom de l'utilisateur</td>
        <td>ID de l'utilisateur : </td>

      </tr>
    </thead>
  </br>
    <tbody>
        <?php foreach ($bookings as $booking): ?>
          <tr>
            <td>{{$booking->place_id}}</td>
            <td>{{$booking->created_at}}</td>
            <td>{{$booking->date_end}}</td>
            <td>{{$booking->getUser()->firstName}}</td>
            <td>{{$booking->getUser()->lastName}}</td>
            <td>{{$booking->user_id}}</td>
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

@endsection
