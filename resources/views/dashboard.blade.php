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
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="text" placeholder="Buscar películas, series y mas..."></div>
              <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Buscar!</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid" style= "padding: 0px">
    <div style="background-image: url('https://wallpapersflood.com/wp-content/uploads/justice_league_2017_poster_fan_art-2560x1080.jpg');
  background-size: cover;   height: calc((100vw / 1143) * 482); ">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-5" style="color: white;">Trailer Del Mes</h1>
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
</x-app-layout>