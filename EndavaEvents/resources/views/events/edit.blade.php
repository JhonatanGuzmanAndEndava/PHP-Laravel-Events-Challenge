@extends('events.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editar prefil</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('events.update', $event->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nombre:</strong>

                    <input type="text" name="name" class="form-control" value="{{ $event->name }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <label for="sel1">Categoria:</label>

                    <select class="form-control" id="sel1" type="text" name="category" value="{{ $event->category }}">

                        @switch($event->category)
                            @case("Conferencia")
                            <option selected="selected">Conferencia</option>
                            <option>Seminario</option>
                            <option>Curso</option>
                            @break

                            @case("Seminario")
                            <option>Conferencia</option>
                            <option selected="selected">Seminario</option>
                            <option>Curso</option>
                            @break

                            @case("Curso")
                            <option>Conferencia</option>
                            <option>Seminario</option>
                            <option selected="selected">Curso</option>
                            @break

                            @default
                            <option>Conferencia</option>
                            <option>Seminario</option>
                            <option>Curso</option>
                            @break
                        @endswitch

                    </select>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Lugar:</strong>

                    <input type="text" name="place" class="form-control" value="{{ $event->place }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Direccion:</strong>

                    <input type="text" name="address" class="form-control" value="{{ $event->address }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Fecha de inicio:</strong>

                    <!-- <input type="text" name="startdate" class="form-control" placeholder="Fecha de inicio"> -->

                    <input class="date form-control" type="text" id="datepicker1" name="start_date" value="{{$event->start_date}}" placeholder="{{$event->start_date}}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Fecha de fin:</strong>

                    <!-- <input type="text" name="enddate" class="form-control" placeholder="Fecha de fin"> -->

                    <input class="date form-control" type="text" id="datepicker2" name="end_date" value="{{$event->end_date}}" placeholder="{{$event->end_date}}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="checkbox">

                    @if ($event->is_virtual == 1)
                        <label><input type="checkbox" value="1" name="is_virtual" checked> Es virtual</label>
                    @else
                        <label><input type="checkbox" value="1" name="is_virtual"> Es virtual</label>
                    @endif
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Actualizar Evento</button>

            </div>

        </div>


    </form>

@endsection