@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card-dark-opacity py-2 px-3">
    <h2 class="title-page my-4">Clubs</h2>
    <div class="table-responsive">
        <table class="table bg-primary-color">
        <thead class="bg-secondary-color">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Localidad</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($clubs as $club)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$club->name}}</td>
                <td>{{$club->dataClub->phone}}</td>
                <td>{{$club->dataClub->address}}</td>
                <td>{{$club->dataClub->city}}</td>
                <td>{{$club->dataClub->location}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>

</div>
@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"  type="text/javascript"></script>
@endsection
