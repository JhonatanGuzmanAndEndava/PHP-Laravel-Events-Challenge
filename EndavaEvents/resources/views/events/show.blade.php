@extends('events.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Información del evento {{$event->name}} </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <table class="table table-bordered">

        <tr>

            <td>Nombre</td>

            <td>{{ $event->name }}</td>

        </tr>

        <tr>

            <td>Categoría</td>

            <td>{{ $event->category }}</td>

        </tr>

        <tr>

            <td>Lugar</td>

            <td>{{ $event->place }}</td>

        </tr>

        <tr>

            <td>Dirección</td>

            <td>{{ $event->address }}</td>

        </tr>

        <tr>

            <td>Fecha de inicio</td>

            <td>{{ $event->start_date }}</td>

        </tr>

        <tr>

            <td>Fecha de fin</td>

            <td>{{ $event->end_date }}</td>

        </tr>

        <tr>

            <td>Es virtual</td>

            @if( $event->is_virtual )
                <td>Si</td>
            @else
                <td>No</td>
            @endif

        </tr>

    </table>

@endsection