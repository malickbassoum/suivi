@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="text-black-50">Liste des tickets</h2>

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Type matériel</th>
      <th scope="col">Marques</th>
      <th scope="col">Model</th>
      <th scope="col">Proprietaire</th>
      <th scope="col">Description de la panne</th>
      <th scope="col">Prestation</th>
      <th scope="col">Suite a donner</th>
      <th scope="col">Date de sortie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Imprimante</td>
      <td>Canon</td>
      <td>2545i</td>
      <td>2545i</td>
      <td>2545i</td>
      <td>2545i</td>
      <td>2545i</td>
      <td>04/01/2022</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>04/01/2022</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>04/01/2022</td>
    </tr>
  </tbody>
</table>
    </div>
@endsection
