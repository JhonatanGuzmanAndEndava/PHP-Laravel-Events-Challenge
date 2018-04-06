@extends('admin.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Generar reporte</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('home') }}"> Volver</a>

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


    <form action="{{ route('admins.doreport') }}" method="POST">

        @csrf


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <label for="sel1">Criterio de orden:</label>

                    <select class="form-control" id="sel1" type="text" name="order">

                        <option value="name">Nombre</option>
                        <option value="created_at">Fecha de creación</option>
                        <option value="category">Categoría</option>
                        <option value="place">Lugar</option>
                        <option value="is_virtual_pres">Presenciales</option>
                        <option value="is_virtual_virt">Virtuales</option>

                    </select>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Desde:</strong>

                    <!-- <input type="text" name="startdate" class="form-control" placeholder="Fecha de inicio"> -->

                    <input class="date form-control" type="text" id="datepicker1" name="start_date">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Hasta:</strong>

                    <!-- <input type="text" name="enddate" class="form-control" placeholder="Fecha de fin"> -->

                    <input class="date form-control" type="text" id="datepicker2" name="end_date">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Formato de reporte</strong> <br />

                    <input type="radio" name="format" value="pdf" checked> PDF
                    <input type="radio" name="format" value="csv"> CSV


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Generar reporte</button>

            </div>

        </div>


    </form>

@endsection