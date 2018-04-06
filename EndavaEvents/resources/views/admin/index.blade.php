@extends('admin.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Todos los usuarios</h2>

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

            <th>Email</th>

            <th>Rol</th>

            <th width="280px">Acciones</th>

        </tr>

        @foreach ($users as $user)

            <tr>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>{{ $user->user_type }}</td>

                <td>

                    <form action="{{ route('admins.doadmin',$user) }}" method="POST">

                        @csrf

                        @method('PUT')

                        <button type="submit" class="btn btn-info">Hacer admin</button>

                    </form>

                    <form action="{{ route('admins.removeadmin',$user) }}" method="POST">

                        @csrf

                        @method('PUT')

                        <button type="submit" class="btn btn-primary">Quitar admin</button>

                    </form>

                    <form action="{{ route('admins.destroy',$user->id) }}" method="POST">

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>


@endsection