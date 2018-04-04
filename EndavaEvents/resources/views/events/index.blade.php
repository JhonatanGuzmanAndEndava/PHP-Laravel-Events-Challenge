@extends('events.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Tus eventos</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('events.create') }}"> Crear evento nuevo</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    @if ($message = Session::get('fail'))

        <div class="alert alert-danger">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>Nombre</th>

            <th>Categoria</th>

            <th>Lugar</th>

            <th>Fecha de inicio</th>

            <th>Fecha de creación</th>

            <th width="280px">Acciones</th>

        </tr>

        @foreach ($events as $event)

            <tr>

                <td>{{ $event->name }}</td>

                <td>{{ $event->category }}</td>

                <td>{{ $event->place }}</td>

                <td>{{ $event->start_date }}</td>

                <td>{{ $event->created_at }}</td>

                <td>

                    <form action="{{ route('events.destroy',$event->id) }}" method="POST">


                        <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Ver</a>

                        <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Editar</a>


                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>


@endsection