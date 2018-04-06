<!DOCTYPE html>

<html>

<head>

    <title>Endava Envents</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/welcomestyle.css') }}" rel="stylesheet">

</head>

<body>

<div class="content">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 margin-tb">

                <div class="pull-left">

                    <h2>Reporte de eventos</h2>

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

                <th>Fecha de actualización</th>

                <th>Propietario</th>

                <th>Categoría</th>

                <th>Lugar</th>

                <th>Dirección</th>

                <th>Fecha de inicio</th>

                <th>Fecha de fin</th>

                <th>Es virtual</th>

            </tr>

            @foreach ($events as $event)

                <tr>

                    <td>{{ $event->name }}</td>

                    <td>{{ $event->created_at }}</td>

                    <td>{{ $event->updated_at }}</td>

                    <td>{{ \App\User::find($event->user_id)->email }}</td>

                    <td>{{ $event->category }}</td>

                    <td>{{ $event->place }}</td>

                    <td>{{ $event->address }}</td>

                    <td>{{ $event->start_date }}</td>

                    <td>{{ $event->end_date }}</td>

                    @if( $event->is_virtual )
                        <td>Si</td>
                    @else
                        <td>No</td>
                    @endif

                </tr>

            @endforeach

        </table>

    </div>

</div>

</body>

</html>