@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10">
      <div class="card-dark-opacity py-2 px-3 justify-content-center">
        <!---HEADER------------>
        <h2 class="title-page my-4">Partidos</h2>
        <div class="col-md-2 offset-md-9 mb-4 ">
          <button type="button" class="btn btn-success btn-block align-middle gameModalBtn"
                  data-toggle="modal" data-target="#gameModal">+ Nuevo</button>
        </div>
        <div class="row justify-content-center col-md-10 offset-md-1">
          <div class="col-md-5 head-games-primary text-head">
            <h4>Vacantes</h4>
          </div>
          <div class="col-md-2 bg-mix">
          </div>
          <div class="col-md-5 head-games-secondary text-head">
            <h4>Completos</h4>
          </div>
        </div>

        <!---BODY------------>
        <div class="row justify-content-center card-dark py-3 ">
          <div class="col-md-6 text-center">
            @foreach($games_open as $open)
              <p class="text ">
                Club: {{$open->field->club->name}} Día: {{$open->day}}
              </p>
            @endforeach
          </div>
          <div class="col-md-6 text-center">
            @foreach($games_close as $close)
              <p class="text ">
                Club: {{$close->field->club->name}} Día: {{$close->day}}
              </p>
            @endforeach
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="gameModal" tabindex="-1" role="dialog" aria-labelledby="gameModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h5 class="modal-title" id="gameModalLabel">Nuevo partido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body pl-5 mt-3 ">
                  <form class="form-horizontal" action="/games/store" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <input type="hidden" name="club_id" value="{{$club_id}}">
                        <div class="col-4 offset-2">
                          <label for="dateTurn">Elige el día:</label>
                        </div>
                        <div class="col-6">
                          <input type="date" name="dayGame" min="2020-06-01" max="2518-05-25" step="1" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-4 offset-2">
                          <label for="hourTurn">Elige una hora:</label>
                        </div>
                        <div class="col-6">
                          <input type="time" name="hourGame" min="08:00" max="21:00" step="1800" required>
                        </div>
                      </div>
                      <div class="form-group row mt-4">
                        <div class="col-2 offset-3">
                          <input type="submit" class="btn btn-success btn-block" value="Crear">
                        </div>
                      </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!---FOOTER------------>
      </div>

    </div>
</div>
@endsection
