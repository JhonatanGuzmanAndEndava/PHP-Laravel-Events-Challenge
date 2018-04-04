@extends('events.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Crear nuevo evento</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('events.index') }}"> Volver</a>

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


    <form action="{{ route('events.store') }}" method="POST">

        @csrf


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nombre:</strong>

                    <input type="text" name="name" class="form-control" placeholder="Nombre">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <label for="sel1">Categoria:</label>

                    <select class="form-control" id="sel1" type="text" name="category">

                        <option>Conferencia</option>
                        <option>Seminario</option>
                        <option>Curso</option>

                    </select>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Lugar:</strong>

                    <input type="text" name="place" class="form-control" placeholder="Lugar">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Direccion:</strong>

                    <input type="text" name="address" class="form-control" placeholder="Direccion">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Fecha de inicio:</strong>

                    <!-- <input type="text" name="startdate" class="form-control" placeholder="Fecha de inicio"> -->

                    <input class="date form-control" type="text" id="datepicker1" name="start_date">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Fecha de fin:</strong>

                    <!-- <input type="text" name="enddate" class="form-control" placeholder="Fecha de fin"> -->

                    <input class="date form-control" type="text" id="datepicker2" name="end_date">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="is_virtual"> Es virtual</label>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Crear Evento</button>

            </div>

        </div>


    </form>

@endsection