<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slide.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="assets/css/main.css">-->
  </head>

  <header class="masthead text-white text-center" style="background:url('img/deadpool02.jpg')no-repeat center center;background-size:cover;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5" style="color: white;">Busca las películas en las que estés interesado.</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="GET" action="movies">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input class="form-control form-control-lg" type="text" autocomplete="off" name="q" placeholder="Buscar películas, series y mas..."></div>
              <div class="col-12 col-md-3">
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Buscar!">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid" style="padding: 0px">
    <div style="background-image: url('https://wallpapersflood.com/wp-content/uploads/justice_league_2017_poster_fan_art-2560x1080.jpg');
    background-size: cover;   height: calc((100vw / 1143) * 482); ">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-5" style="color: white; text-align:center;">Trailer del mes</h1>
            <div id="player" style="margin: auto;"></div>
            <script>
              // 2. Carga el IFrame Player API De forma asyncronica.
              var tag = document.createElement('script');

              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



              var player;

              function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                  height: '390',
                  width: '640',
                  videoId: 'bxG9VN9RrVs',
                  events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                  }
                });
              }

              // 4. The API will call this function when the video player is ready.
              function onPlayerReady(event) {
                //event.target.playVideo();
              }

              // 5. The API calls this function when the player's state changes.
              //    The function indicates that when playing a video (state=1),
              //    the player should play for six seconds and then stop.
              var done = false;

              function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                  setTimeout(stopVideo, 6000);
                  done = true;
                }
              }

              function stopVideo() {
                player.stopVideo();
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="text-center">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item  active">
          <img class="" src="img\poster\harleyqueen.jpg" alt="First slide" style="display:inline-block;" width="159" height="229">
          <img class="" src="img\poster\black-panther-web.jpg" alt="Second slide" style="display:inline-block;" width="159" height="229">
          <img class="" src="img\poster\bladerunner.jpg" alt="Second slide" width="159" height="229" style="display:inline-block;">
          <img class="" src="img\poster\captain_marvel.jpg" alt="Second slide" width="159" height="229" style="display:inline-block;">
          <img class="" src="img\poster\Cursed.jpg" alt="Second slide" width="159" height="229" style="display:inline-block;">
          <img class="" src="img\poster\joker.jpg" alt="Second slide" width="159" height="229" style="display:inline-block;">
          <img class="" src="img\poster\star.jpg" alt="Second slide" width="159" height="229" style="display:inline-block;">

        </div>
        <div class="carousel-item">
          <img class="" src="img\poster\it.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">
          <img class="" src="img\anita.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">
          <img class="" src="img\poster\poster-vengadores-endgame.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">
          <img class="" src="img\poster\dunkerke.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">
          <img class="" src="img\poster\Malditos_Bastardos_portada.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">
          <img class="" src="img\Movie3.jpg" alt="Second slide" style="display: inline-block;" width="159" height="229">

        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div style="margin-top: 30px;">
      <label for="" id="Label1"></label>
    </div>

  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</x-app-layout>