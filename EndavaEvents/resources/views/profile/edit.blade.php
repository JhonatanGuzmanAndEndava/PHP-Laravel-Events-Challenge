@extends('profile.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editando perfil</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('profile.index') }}"> Volver </a>

            </div>

        </div>

    </div>


    <form action="{{ route('profile.update', $profile) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nombre:</strong>

                    <input type="text" name="name" class="form-control" value="{{ $profile->name }}" placeholder="{{ $profile->name }}" readonly="readonly">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Apellido:</strong>

                    <input type="text" name="lastname" class="form-control" value="{{ $profile->lastname }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>E-Mail:</strong>

                    <input type="text" name="email" class="form-control" value="{{ $profile->email }}" placeholder="{{ $profile->email }}" readonly="readonly">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Telefono:</strong>

                    <input type="text" name="phone" class="form-control" value="{{ $profile->phone }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Documento:</strong>

                    <input type="text" name="cc" class="form-control" value="{{ $profile->cc }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Direccion:</strong>

                    <input type="text" name="address" class="form-control" value="{{ $profile->address }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Ciudad:</strong>

                    <input type="text" name="city" class="form-control" value="{{ $profile->city }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Fecha de nacimiento:</strong>

                    <input class="date form-control" type="text" id="datepicker5" name="birthday" value="{{ $profile->birthday }}">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Foto:</strong>

                    <input type="file" name="photo">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Editar perfil</button>

            </div>

        </div>


    </form>

@endsection