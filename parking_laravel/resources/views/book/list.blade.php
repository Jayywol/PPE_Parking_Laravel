<th scope="col">@extends('layouts.app')

@section('content')
<center>
  <h1>Liste des réservations</h1>
</center>

<div class = class="col-md-6">
  <div style="text-align: center">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Numéro de la place : </th>
          <th scope="col">Date début : </th>
          <th scope="col">Date fin : </th>
          <th scope="col">Prénom de l'utilisateur</th>
          <th scope="col">Nom de l'utilisateur</th>
          <th scope="col">Email de l'utilisateur</th>
          <th scope="col">ID de l'utilisateur : </th>
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
              <td>{{$booking->getUser()->email}}</td>
              <td>{{$booking->user_id}}</td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

@endsection
