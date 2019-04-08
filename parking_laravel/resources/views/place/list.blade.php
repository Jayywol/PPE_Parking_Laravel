@extends('layouts.app')

@section('content')
<center>
  <h1>Liste des places</h1>
</center>

<div class = class="col-md-6">
  <div style="text-align: center">
    <table class="table table-dark">
      <thead>
        <tr>
          <td>Numéro de la place : </td>
          <td>Disponibilité (0 indisponible - 1 disponible)</td>
        </tr>
      </thead>
    </br>
      <tbody>
          <?php foreach ($place as $place): ?>
            <tr>
              <td>{{$place->id}}</td>
              <td>{{$place->available}}</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</div>

@endsection
