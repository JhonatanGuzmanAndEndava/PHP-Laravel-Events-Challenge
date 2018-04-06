@extends('admin.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Todos los eventos</h2>

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

            <th>Fecha de creación</th>

            <th>Propietario</th>

            <th width="280px">Acciones</th>

        </tr>

        @foreach ($events as $event)

            <tr>

                <td>{{ $event->name }}</td>

                <td>{{ $event->created_at }}</td>

                <td>{{ \App\User::find($event->user_id)->email }}</td>

                <td>

                    <form action="{{ route('admins.delete',$event) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('admins.show',$event) }}">Ver</a>

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>


@endsection