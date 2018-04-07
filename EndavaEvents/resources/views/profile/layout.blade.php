<!DOCTYPE html>

<html>

<head>

    <title>Perfil de usuario</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/welcomestyle.css') }}" rel="stylesheet"> -->

</head>

<body>

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('profile.index') }}">Profile</a>

            @if(Auth::user()->user_type == "admin")
                <a href="{{ route('admins.users') }}">All users</a>
                <a href="{{ route('admins.events') }}">All events</a>
                <a href="{{ route('admins.report') }}">Reports</a>
            @endif

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif

<div class="content">

    <div class="container">

        @yield('content')

    </div>

</div>

<script type="text/javascript">
    $('#datepicker5').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
</script>

</body>

</html>