@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de partidos</h1>
    @foreach($games as $game)
        <h3>{{$game->field->club->name}}</h3>
        <p>{{$game->field->name}}</p>
    @endforeach
</div>
@endsection
