@extends('profile.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Bienvenido a tu perfil</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('profile.edit', $profile) }}"> Editar perfil</a>

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <td>Nombre</td>

            <td>{{ $profile->name }}</td>

        </tr>

        <tr>

            <td>Apellido</td>

            <td>{{ $profile->lastname }}</td>

        </tr>

        <tr>

            <td>E-mail</td>

            <td>{{ $profile->email }}</td>

        </tr>

        <tr>

            <td>Telefono</td>

            <td>{{ $profile->phone }}</td>

        </tr>

        <tr>

            <td>Documento</td>

            <td>{{ $profile->cc }}</td>

        </tr>

        <tr>

            <td>Direccion</td>

            <td>{{ $profile->address }}</td>

        </tr>

        <tr>

            <td>Ciudad</td>

            <td>{{ $profile->city }}</td>

        </tr>

        <tr>

            <td>Fecha de nacimiento</td>

            <td>{{ $profile->birthday }}</td>

        </tr>

        <tr>

            <td>Foto</td>

            <td>{{ $profile->photo }}</td>

    </table>


@endsection