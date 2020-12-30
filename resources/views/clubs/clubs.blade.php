@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card-dark-opacity py-2 px-3">
    <h2 class="title-page my-4">Clubs</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-dark">
        <thead class="bg-primary-color text-dark ">
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Localidad</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($clubs as $club)
            <tr class="text-center">
                <th scope="row">{{$i++}}</th>
                <td>{{$club->name}}</td>
                <td>{{$club->dataClub->phone}}</td>
                <td>{{$club->dataClub->address}}</td>
                <td>{{$club->dataClub->city}}</td>
                <td>{{$club->dataClub->location}}</td>
                <td>
                  <a href="/games/{{$club->id}}" class="btn btn-success a-btn-slide-text"><span><strong>Partidos</strong></span></a>
                </td>
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
