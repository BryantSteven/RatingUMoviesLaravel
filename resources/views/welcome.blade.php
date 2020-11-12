<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<div class="container-fluid p-0">
    <div>
        <div class="header-video">
            <!-- Reproductor de video -->
            <video autoplay muted loop id="myVideo">
                <source src="vid/home video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="header-overlay"></div>

        <div class="header content">
            <div class="menu" style="margin: auto;">
                <h1>Bienvenido a RatingUMovies!</h1>
                <p>Inicia sesión para continuar y empezar a disfrutar de la sabiduría cineasta.</p>
                <div>
                    @if (Route::has('login'))
                    <a href="{{ url('/login') }}" class="btn">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">Register</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>